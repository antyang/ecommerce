<?php

// class login extends CI_Model {

    function login_admin($data)
    {
    	return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?  AND userlevel = '1'", array($data['email'], $data['password']))->row_array();
    }
}