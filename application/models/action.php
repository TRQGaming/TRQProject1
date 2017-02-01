<?php
class Action extends CI_Model {

    function new($val)
     {
         $query = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
         $values = array($this->input->post('first'), $this->input->post('last'), $this->input->post('email'), md5($this->input->post('password')));
         return $this->db->query($query, $values);
     }
    function getOne($email)
     {
       return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
     }
}
