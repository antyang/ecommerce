<?php

class storefront extends CI_Model {

    function all_products()
    {   
        $query = $this->db->query('SELECT * FROM products LEFT JOIN categories ON products.category_id = categories.id');
        return $query->result();
    }
    function most_popular()
    {
        return $this->db->query('SELECT * FROM products ORDER BY sold DESC;')->row_array();
    }
    function all_category()
    {
        return $this->db->query('SELECT categories.category FROM categories')->result();
    }
    function category($data)
    {
        return $this->db->query("SELECT * FROM products LEFT JOIN products ON categories.id = products.category_id WHERE category_id = ?", array($data['category']))->result();
    }
    function login_admin($data)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ? AND password = ?", array($data['email'], $data['password']))->row();
    }
    function delete_product($id)
    {
        $query = $this->db->query("DELETE FROM products WHERE id = ?", array($id));
        return $query;
    }

    function removeFromCart($id)
    {
        $query = "DELETE FROM products WHERE id = $id";
        $this->db->query($query);
    }
    function updateCart($new_qty)
    {
        $query = "UPDATE products SET quantity =? WHERE id=?";
        $values = array($new_qty['quantity'], $new_qty['id']);
        $this->db->query($query, $values);
    }
    function show_product($id){
        $query = $this->db->query('SELECT * FROM products WHERE id = ?', array($id));
        return $query->result();
    }
}