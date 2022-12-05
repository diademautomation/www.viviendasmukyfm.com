<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vivienda extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->model('casa_model');  

     

	}

	// New //
	

	public function americana2(){

		//$this->load->view('armut/special/header2');

		$this->load->view('armut/vivienda/americana2');		

		$this->load->view('armut/special/footer2');

	}

	public function minimalista(){

		 $this->load->view('armut/special/header2');

		// $this->load->view('armut/vivienda/minimalista');		

		$this->load->view('armut/special/footer2');

	}
	public function premium(){

		 $this->load->view('armut/special/header2');

		// $this->load->view('armut/vivienda/premium');		

		$this->load->view('armut/special/footer2');

	}


	public function casas(){



		$this->load->view('armut/special/header2');

		// $this->load->view('armut/vivienda/casas');		

		$this->load->view('armut/special/footer2');

	}




	public function casa($id_casa)
	{
		$data = array(

			'article' => $this->casa_model->get_casa($id_casa)
		);

		$this->load->view('armut/special/header');

		$this->load->view('armut/vivienda/casa',$data);

		$this->load->view('armut/special/footer');
	}





	






}    