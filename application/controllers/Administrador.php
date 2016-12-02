<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

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
		$this->load->view('Administrador/Header');
		$this->load->view('Site/Principal',$data);
		$this->load->view('Administrador/Footer');

	}


	public function ListaUsuario()
	{
             
        $user = array( );
		$user['Usuario'] = $this->Usuario_model->presentarUsuario();
		
		$this->load->view('Administrador/Header');
	    $this->load->view('Administrador/ListaUsuario',$user);
	    $this->load->view('Administrador/Footer');
	}

           public function ListaAnuncio()
	      {
             
        $data = array( );
		 $data['Anuncio'] = $this->Anuncio_model->prensetarAnuncio();
		
		$this->load->view('Administrador/Header');
	    $this->load->view('Administrador/ListaAnuncio',$data);
	    $this->load->view('Administrador/Footer');
	}


}

/* End of file Administrador.php */
/* Location: ./application/controllers/Administrador.php */