<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presupuesto extends CI_Controller {


	public function __construct()                         
	{

		parent::__construct();
		$this->load->helper('url');
		$this->load->library('email');
		# ---------- Empresa ------
		$this->load->library('templatePresupuesto');
		# ---------- Cliente ------
		$this->load->library('templateMensajeCliente');
				
	}



    public function index(){

        $data = array(
            'titulo' => 'Presupuesto Online',
            'subtitulo' => '',
            'active'=>'otro',
        );

        $this->load->view('armut/special/header',$data);

        $this->load->view('armut/presupuesto/presupuesto');
		
		$this->load->view('armut/special/footer');

    }

	

	public function enviar_mail(){

		$name = $this->input->post('name');
		$apellido = $this->input->post('apellido');
		$direccion = $this->input->post('direccion');
		$localidad = $this->input->post('localidad');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$tipo = $this->input->post('tipo');
		$metro = $this->input->post('metro');
		$armado = $this->input->post('armado');
		$pago = $this->input->post('pago'); 	
		$message = $this->input->post('message');    

		if(!empty($name) and !empty($apellido) and !empty($direccion) and !empty($localidad) and !empty($email) and !empty($tel) and !empty($tipo) and !empty($metro) and !empty($armado) and !empty($pago) and !empty($message)){  

	   # ----- Mensaje para el Cliente --------------
		    $to2 = $email; 
			$subject2 = 'Mensaje recibido'; 
			$message2 = $this->templatemensajecliente->mensajecliente($email);	
			$from2 = 'Viviendas-Muky';
		   
			$headers2 = "From: " .$from2. "\r\n";
			$headers2 .= "MIME-Version: 1.0\r\n";
			$headers2 .= "Content-Type: text/html; charset='UTF-8'\r\n";    		
			$headers2 .= "Content-Transfer-Encoding: 8bit\r\n";

		   
			mail($to2,$subject2,$message2,$headers2);
   
	   # ----- Mensaje para la Empresa --------------

			$to = 'info@viviendasmukyfm.com';   
			$subject = 'Consulta de ' .$name;
			$message = $this->templatepresupuesto->mensaje($name,$apellido,$direccion,$localidad,$email,$tel,$tipo,$metro,$armado,$pago,$message);	

			$from = 'Consulta-Vivienda';

			$headers = "From: " .$from. "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
		    $headers .= "Content-Type: text/html; charset='UTF-8'\r\n";    		
		    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
					   

			mail($to,$subject,$message,$headers);
		   
			redirect(base_url());

	   }
	   else {
			redirect(base_url());
		}
		
   }





	
}





