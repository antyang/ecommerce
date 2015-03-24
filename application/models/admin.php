<?php

 class admin extends CI_Model {

    function login_admin($data)
    {
    	return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?  AND userlevel = '1'", array($data['email'], $data['password']))->row_array();
    }
    // function photo() 
    // {  
    //     $pic_results = array();
    //     $this->db->select('productname, pic_file');
    //     $this->db->from('products');
        
    //     $query = $this->db->get();

    //     if($query->num_rows() > 0) 
    //     {
    //      $pic_results = $query->result();
    //     }

    //     return $pic_results;   

    // }  

//     function get_users_by_email($email){
//         return $this->db->query("SELECT * FROM members WHERE (email = ?)", array($email))->row_array();
//     }


}