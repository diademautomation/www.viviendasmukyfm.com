<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {


	public function __construct()                         
	{
		parent::__construct();
		$this->load->helper('url');
	}

	
	// public function index()
	// {
		
	// 	$this->load->view('armut/special/header');

    //     $this->load->view('armut/nosotros/construccion');
		
	// 	$this->load->view('armut/special/footer');
	// }



	public function contacto()
	{
		
	 	$title = 'Contacto';
		$subtitle ='Home';
        $this->load->view('armut/nosotros/contacto',$title,$subtitle);
		
	 	$this->load->view('armut/special/footer2');
	 }




	
}