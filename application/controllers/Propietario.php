<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Propietario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Usuario_model');
		$this->load->model('Anuncio_model');
	}

	public function index()
	{
		 $data = array();

		 $data['Anuncio'] = $this->Anuncio_model->prensetarAnuncio();


           
		   $this->load->view('Propietario/Header');
		   $this->load->view('Site/Principal',$data);
		   $this->load->view('Propietario/Footer');
	}

        public function contact()

		{
			$this->load->view('Propietario/Header');
			$this->load->view('Site/Contact');
			$this->load->view('Propietario/Footer');
		}

		public function aboutMe()
		{
			$this->load->view('Propietario/Header');
			$this->load->view('Site/AboutMe');
			$this->load->view('Propietario/Footer');
		}

		public function help()
		{
		    $this->load->view('Propietario/Header');
			$this->load->view('Site/Help');
			$this->load->view('Propietario/Footer');
		}

		public function privacy()
		{
			$this->load->view('Propietario/Header');
			$this->load->view('Site/Privacy');
			$this->load->view('Propietario/Footer');
		}

      public function guardar()
      {
      	    	
           $this->Usuario_model->guardarUsuario($_POST);
    
      	   $this->load->view('Propietario/Header');
		   $this->load->view('Login/Iniciar');
		   $this->load->view('Propietario/Footer');
      }


}

/* End of file Anuncio.php */
/* Location: ./application/controllers/Anuncio.php */