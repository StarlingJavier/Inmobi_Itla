<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function guardarUsuario($user)
	{
		$this->db->insert('Usuario',$user);
	}
        

        public function presentarUsuario()
        {
        	$query = $this->db->get('Usuario');
        	return $query->result();


        }
		
    
      public function entrar($username,$password)
       {

            $this->db->where('username ', $username);
            $this->db->where('password', $password);
              

			 $query = $this->db->get('Usuario');

			 $fila=$query->row();

   if($fila!=null ){

    
  
if($fila->id_roles==2){

$this->db->where('username ', $username);
$this->db->where('password', $password);
$query = $this->db->get('Usuario');


}

}

    if ($query->num_rows()>0){
  
    return  $fila;
      
    }else
    {
      return $fila;


  }

    } 

}

/* End of file Usuario_model.php */
/* Location: ./application/models/Usuario_model.php */