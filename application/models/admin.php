<?php

 class admin extends CI_Model {

    function login_admin($data)
    {
    	return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?  AND userlevel = '1'", array($data['email'], $data['password']))->row_array();
    }

//     function get_users_by_email($email){
//         return $this->db->query("SELECT * FROM members WHERE (email = ?)", array($email))->row_array();
//     }


}