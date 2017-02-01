<?php
class user extends CI_Model { //class must be the samw name as the file.

    function user_register($register)
     {
         $query = "INSERT INTO users (first_name, last_name, user_name, email, password) VALUES (?, ?, ?, ?,?)";
         $values = array($this->input->post('first_name'), $this->input->post('last_name'),$this->input->post('user_name'), $this->input->post('email'), md5($this->input->post('password')));
         return $this->db->query($query, $values);
     }

     function products($products)
     {
         $query = "INSERT INTO products (name, producer, genre, price, discription, release_date)VALUES(?,?,?,?,?.?)";
         $values = array($this->input->post('name'),$this->input->post('producer'),$this->input->post('genre'),$this->input->post('price'),$this->input->post('discription'),$this->input->post('release_date'));
         return $this->db->query($query,$values);
     }
     function reviews($reviews)
     {
        $query = "INSERT INTO reviews (comments)VALUES(?)";
        $values = array($this->input->post('comments'));
        return $this->db->query($query,$values);
     }
    
}

//every table should have a method within a class. the methods are the functions written inside of the class. 
//this file connects the what the user puts into the browser to the database.