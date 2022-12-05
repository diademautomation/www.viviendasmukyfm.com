<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Controller {


	public function __construct()                         
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('casa_model'); 
	}


	public function americana()
	{
        $data = array(
			'titulo' => 'Americana',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);

		$dato = array(

			'casa_americana' => $this->casa_model->get_all_americana()			
		);

		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/americana',$dato);
		$this->load->view('armut/special/footer');
	}


	public function americana2()
	{
        $data = array(
			'titulo' => 'Americana',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);

		$dato = array(

			'casa_americana' => $this->casa_model->all_americana()			
		);

		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/americana2',$dato);
		$this->load->view('armut/special/footer');
	}



    public function minimalista()
	{
        $data = array(
			'titulo' => 'Minimalista',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);

		$dato = array(

			'casa_minimalista' => $this->casa_model->get_all_minimalista()			
		);

		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/minimalista',$dato);
		$this->load->view('armut/special/footer');
	}


    public function premium()
	{
        $data = array(
			'titulo' => 'Premium',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);


		$dato = array(

			'casa_premium' => $this->casa_model->get_premium()			
		);


		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/premium',$dato);
		$this->load->view('armut/special/footer');
	}


    #================ [ PLANOS ] ================

    public function planoamericana()
	{
        $data = array(
			'titulo' => 'Planos',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);

		$dato = array(

			'casa_americana' => $this->casa_model->get_all_americana()			
		);

		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/planos/planoamericana',$dato);
		$this->load->view('armut/special/footer');
	}

	public function planoamericana2()
	{
        $data = array(
			'titulo' => 'Planos',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);

		$dato = array(

			'casa_americana' => $this->casa_model->all_americana()			
		);

		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/planos/planoamericana2',$dato);
		$this->load->view('armut/special/footer');
	}


	public function planominimalista()
	{
        $data = array(
			'titulo' => 'Planos',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);
		$dato = array(

			'casa_minimalista' => $this->casa_model->get_all_minimalista()			
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/planos/planominimalista',$dato);
		$this->load->view('armut/special/footer');
	}



	public function planopremium()
	{
        $data = array(
			'titulo' => 'Planos',
			'subtitulo' => 'VIVIENDA',
			'active'=>'modelos',
		);
		$dato = array(

			'casa_premium' => $this->casa_model->get_premium()			
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/planos/planopremium',$dato);
		$this->load->view('armut/special/footer');
	}


    #================ [ CASA - INDIVUDUAL ] ================


    public function casa_Americana($id)
	{
        $data = array(
			'titulo' => 'vivienda',
			'subtitulo' => 'Americana',
			'active'=>'modelos',
		);
		
		$dato = array(

			'datos_casa' => $this->casa_model->get_casa_americana($id)			
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/casa',$dato);
		$this->load->view('armut/special/footer');
	}



	public function casa_Minimalista($id)
	{
        $data = array(
			'titulo' => 'vivienda',
			'subtitulo' => 'Minimalista',
			'active'=>'modelos',
		);
		
		$dato = array(

			'datos_casa' => $this->casa_model->get_casa_minimalista($id)			
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/casa',$dato);
		$this->load->view('armut/special/footer');
	}




	public function casa_Premium($id)
	{
        $data = array(
			'titulo' => 'vivienda',
			'subtitulo' => 'Premium',
			'active'=>'modelos',
		);
		
		$dato = array(

			'datos_casa' => $this->casa_model->get_casa_premium($id)			
		);
		$this->load->view('armut/special/header',$data);
        $this->load->view('armut/modelos/casa',$dato);
		$this->load->view('armut/special/footer');
	}



	
}


# id              ----  INT 
# descripcion     ----  TEXT    
# descripcion2    ----  TEXT
# tipo            ----  VARCHAR (20)
# precio          ----  VARCHAR (50) 
# dormitorio      ----  INT (20) 
# baño            ----  INT (20)    
# cochera         ----  INT (20)
# metro           ----  VARCHAR (20)
# date            ----  TIMES TAMP / CURRENT / ON UPDATE
#10