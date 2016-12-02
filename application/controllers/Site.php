<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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

		$this->load->view('Partial/Header');
		$this->load->view('Site/Principal',$data);
		$this->load->view('Partial/Footer');
		}

		public function contact()

		{
			$this->load->view('Partial/Header');
			$this->load->view('Site/Contact');
			$this->load->view('Partial/Footer');
		}

		public function aboutMe()
		{
			$this->load->view('Partial/Header');
			$this->load->view('Site/AboutMe');
			$this->load->view('Partial/Footer');
		}

		public function help()
		{
		    $this->load->view('Partial/Header');
			$this->load->view('Site/Help');
			$this->load->view('Partial/Footer');
		}

		public function privacy()
		{
			$this->load->view('Partial/Header');
			$this->load->view('Site/Privacy');
			$this->load->view('Partial/Footer');
		}

}

/* End of file Site.php */
/* Location: ./application/controllers/Site.php */