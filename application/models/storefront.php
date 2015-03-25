<?php

class storefront extends CI_Model {

    function all_products()
    {
        return $this->db->query('SELECT * FROM products')->result();
    }
    function most_popular()
    {
        return $this->db->query('SELECT * FROM products ORDER BY sold DESC;')->row_array();
    }
    function login_admin($data)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?  AND userlevel = '1'", array($data['email'], $data['password']))->row_array();
    }
}