<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()                         
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('casa_model');
	}
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{	
		$casas = array(

			'casa_americana' => $this->casa_model->get_americana(),
			'casa_minimalista' => $this->casa_model->get_minimalista(),
			'casa_premium' => $this->casa_model->get_premium()			
		);	


		 $this->load->view('armut/welcome/welcome',$casas);
		 $this->load->view('armut/special/footer');
	}


	

	
}
