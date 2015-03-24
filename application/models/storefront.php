<?php

// class login extends CI_Model {

    function all_products($data)
    {
        return $this->db->query('SELECT * FROM products');
    }
    function most_popular()
    {
        return $this->db->query('SELECT * FROM products ORDER BY sold DESC;');
    }
    function login_user($data)
    {
    	// var_dump($email);
    	return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ? ", array($data['email'], $data['password']))->row_array();
    }
}