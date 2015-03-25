<?php

class storefront extends CI_Model {

    function all_products()
    {   
        $query = $this->db->query('SELECT * FROM products');
        return $query->result();
    }
    function most_popular()
    {
        return $this->db->query('SELECT * FROM products ORDER BY sold DESC;')->row_array();
    }
    function category($data)
    {
        return $this->db->query("SELECT * FROM products LEFT JOIN products ON categories.id = products.category_id WHERE category_id = ?", array($data['category']))->result();
    }
    function login_admin($data)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?  AND userlevel = '1'", array($data['email'], $data['password']))->row_array();
    }
    function delete_product($id)
    {
        $query = $this->db->query("DELETE FROM products WHERE id = ?", array($id));
        return $query;

    }


}