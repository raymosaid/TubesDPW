<?php
class M_Details extends CI_Model{

	function __construct(){  
        // Call the Model constructor  
        parent::__construct();  
    }  
    //we will use the select function  
    public function select($kode){  
        //data is retrive from this query  
        $query = $this->db->get_where('t_details', ['kode_menupesanan' => $kode]);  
        return $query;  
    }

}
