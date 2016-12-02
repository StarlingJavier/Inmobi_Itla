<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Anuncio_model');
	}

	public function index()
	{
		
            
            $data = array();

		 $data['Anuncio'] = $this->Anuncio_model->prensetarAnuncio();


    
	    $this->load->view('Propietario/Header');
		$this->load->view('Site/Principal', $data);
		$this->load->view('Propietario/Footer');
		
	}

    public function publicarAnuncio()
    {
	    $this->load->view('Propietario/Header');
		$this->load->view('Anuncio/PublicarAnuncio');
		$this->load->view('Propietario/Footer');
    }

	public function guardar()
	{
        
			if($_GET) {

		  $this->Anuncio_model->guardarAnuncio($_GET);
		   
		    }

		$this->load->view('Propietario/Header'); 
		$this->load->view('Anuncio/Mensaje');
		$this->load->view('Propietario/Footer');
	}

	public function verAnuncio()
	{
       
        
          


       	$this->load->view('Propietario/Header');
		$this->load->view('Anuncio/VerAnuncio',$_POST);
		$this->load->view('Propietario/Footer');

       

	
	}

	 public function subirImagen() { 
         $this->load->view('upload_form', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']  = 100; 
         $config['max_width'] = 1024; 
         $config['max_height'] = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('imagen')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('Anuncio/PublicarAnuncio', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $this->load->view('Site/Principal', $data); 
         } 
      } 

}

/* End of file Anuncio.php */
/* Location: ./application/controllers/Anuncio.php */