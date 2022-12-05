

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller{
    public function __construct() {
        parent::__construct();
         
        //Cargamos la librería de validación (todos las librerias, helpers, etc pueden ser cargados en los controladores o auto cargarlos indicándolo en los ficheros de configuración)
        $this->load->library('form_validation');
        $this->load->helper("url"); //Cargamos el helper de url imprescindible para usar la función base_url
    }
     
    public function index(){
       
        $this->load->view("armut/formulario/formulario_view");
    }
 
 
    public function recibirFormulario(){
        if($this->input->post("submit")){
            //Validaciones
                                              //name del campo, titulo, restricciones
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|alpha|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email|trim');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[3]');
             
            //Mensajes
            // %s es el nombre del campo que ha fallado
            $this->form_validation->set_message('required','El campo %s es obligatorio');
            $this->form_validation->set_message('alpha','El campo %s debe estar compuesto solo por letras');
            $this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
            $this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
             
             if($this->form_validation->run()!=false){ //Si la validación es correcta
                $datos["mensaje"]="Validación correcta";
             }else{
                $datos["mensaje"]="Validación incorrecta";
             }
              
             $this->load->view("armut/formulario/formulario_view",$datos);
        }
    }
     
}
?>
