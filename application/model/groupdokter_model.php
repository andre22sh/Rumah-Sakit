<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class groupProduct_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

    public function add()
    {
		$namaGroup = $this->input->post('txtGroupProduk');
		$query = $this->db->query("INSERT INTO m_groupproduct(GroupProduct_Name)
					VALUES ('$namaGroup')");
    }

}
