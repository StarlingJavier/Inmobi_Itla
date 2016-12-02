<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('Usuario_model');
		$this->load->model('Anuncio_model');
	}

	public function index()
	{

		$this->load->view('partial/header');
    	$this->load->view('Login/Iniciar');
    	$this->load->view('partial/Footer');


   

      

	}

    public function iniciar()
    {
    	if($_POST){

            $username=$_POST['username'];
            $password=$_POST['password'];

            $tmp=$this->Usuario_model->entrar($username,$password);



        if($tmp==false){


            $this->load->view('Partial/Header');   
          $this->load->view('Login/Iniciar');
        $this->load->view('Partial/Footer');

       }

       else{


                    if($tmp !== false && $tmp->id_roles==1){

                   
                    redirect('Propietario');

                     $_SESSION['usuario'] = $tmp->username;

                
            }

       
                elseif($tmp !== false && $tmp->id_roles==2){
                   

                  redirect('Administrador');

          
               
                     $_SESSION['usuario'] = $tmp->username;
              }
             
            }

             }else {
              $this->load->view('error/error_general');
           }
         
      
    }

  

function salir(){
    session_destroy();
    redirect('Login');
  }



    public function registrar()
    {
    	$this->load->view('partial/header');
    	$this->load->view('Login/Registar');
    	$this->load->view('partial/Footer');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */