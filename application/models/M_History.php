<?php
class M_History extends CI_Model{

	function __construct(){  
        // Call the Model constructor  
        parent::__construct();  
    }  
    //we will use the select function  
    public function select(){  
        //data is retrive from this query  
        $query = $this->db->get('t_pemesanan');  
        return $query;  
    }

}
