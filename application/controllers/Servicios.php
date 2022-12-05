<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {


	public function __construct()                         
	{
		parent::__construct();
		$this->load->helper('url');

		
	}



	public function construccion()
	{   
		$data = array(
			'titulo' => 'Construcción',
			'subtitulo' => 'VIVIENDAS',
			'active'=>'servicios',
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/servicios/construccion');
		$this->load->view('armut/special/footer');
	}



    public function mediosdepago()
	{
		$data = array(
			'titulo' => 'Medios de pago',
			'subtitulo' => 'VIVIENDAS',
			'active'=>'servicios',
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/servicios/mediosdepago');
		$this->load->view('armut/special/footer');
	}




	
}