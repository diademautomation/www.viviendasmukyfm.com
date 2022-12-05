<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {


	public function __construct()                         
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('email');
		# ---------- Empresa ------
		$this->load->library('templateMensaje');
		$this->load->library('templateMensajeCliente');
		// $this->load->library('templateRevision');

		# ---------- Franquicia Trequen Lauden -----------
		// $this->load->library('templateLauquen');

		# ---------- Franquicia San Miguel Del Monte -----------
		// $this->load->library('templateMonte');

		
	}


	public function index()
	{
		$data = array(
			'titulo' => 'Contacto',
			'subtitulo' => '',
			'active'=>'contacto',
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/contacto/contacto');
		$this->load->view('armut/special/footer');
	 }

	 public function enviar_mail(){
		 $name = $this->input->post('name');
		 $email = $this->input->post('email');
		 $tel = $this->input->post('tel');
		 $tipo = $this->input->post('tipo');
		 $metro = $this->input->post('metro');
		 $message = $this->input->post('message');    

		 if(!empty($name) and !empty($email) and !empty($tel) and !empty($tipo) and !empty($metro) and !empty($message)){  

			
			# ----- Email para el Cliente --------------
			$to2 = $email; 
			$subject2 = 'Mensaje recibido'; 
			$message2 = $this->templatemensajecliente->mensajecliente($email);	
			$from2 = 'Viviendas-Muky';
	   
			$headers2 = "From: " .$from2. "\r\n";
			$headers2 .= "MIME-Version: 1.0\r\n";
			$headers2 .= "Content-Type: text/html; charset='UTF-8'\r\n";    		
			$headers2 .= "Content-Transfer-Encoding: 8bit\r\n";

	   
			mail($to2,$subject2,$message2,$headers2);			
			
								
   
	   		# ----- Email para la Empresa Parque Insdustrial Quilmes--------------

			$to = 'info@viviendasmukyfm.com'; 
			$subject = 'Consulta de ' .$name;
			$message = $this->templatemensaje->mensaje($name,$email,$tel,$tipo,$metro,$message);	
			$from = 'Consulta-Viviendas';

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


