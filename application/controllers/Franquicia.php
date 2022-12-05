<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franquicia extends CI_Controller {


	public function __construct()                         
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->library('franquiciaCliente');
		$this->load->library('franquiciaEmpresa');

		
	}


	public function index()
	{
		$data = array(
			'titulo' => 'Franquicia',
			'subtitulo' => 'VIVIENDAS MUKY',
			'active'=>'franquicia',
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/franquicia/franquicia');
		$this->load->view('armut/special/footer');
	 }

	 public function franquicia_mail(){
		 $name = $this->input->post('name');
		 $email = $this->input->post('email');
		 $tel = $this->input->post('tel');
         $exp = $this->input->post('exp');
		 $localidad = $this->input->post('localidad');
		 $message = $this->input->post('message');    

		 if(!empty($name) and !empty($email) and !empty($tel) and !empty($exp) and !empty($localidad) and !empty($message)){  

		# ----- Mensaje para el Cliente --------------
			$to2 = $email; 
	 		$subject2 = 'Mensaje recibido'; 
	 		$message2 = $this->franquiciacliente->mensajecliente($email);	
	 		$from2 = 'Viviendas-Muky';
			
	 		$headers2 = "From: " .$from2. "\r\n";
   	 		$headers2 .= "MIME-Version: 1.0\r\n";
     		$headers2 .= "Content-Type: text/html; charset='UTF-8'\r\n";    		
     		$headers2 .= "Content-Transfer-Encoding: 8bit\r\n";

			
	 		mail($to2,$subject2,$message2,$headers2);
	
		# ----- Mensaje para la Empresa --------------

	 		$to = 'info@viviendasmukyfm.com';  
	 		$subject = 'Franquicia Consulta';
	 		$message = $this->franquiciaempresa->mensajeempresa($name,$email,$tel,$exp,$localidad,$message);	
 
	 		$from = 'Consulta-Franquicia';

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


