<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncio_model extends CI_Model {

	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function guardarAnuncio($data)
	{
		$this->db->insert('Anuncio', $data);
	}

	public function prensetarAnuncio()
	{
		
    	$query = $this->db->get('Anuncio');

    	return $query->result();
    }

   }

/* End of file Anuncio_model.php */
/* Location: ./application/models/Anuncio_model.php */