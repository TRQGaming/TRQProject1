<?php
class user extends CI_Model { //class must be the samw name as the file.

    function new($val)
     {
         $query = "INSERT INTO users (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?,?)";
         $values = array($this->input->post('first'), $this->input->post('last'),$this->input->post('username'), $this->input->post('email'), md5($this->input->post('password')));
         return $this->db->query($query, $values);
     }

     function products($val)
     {
         $query = "INSERT INTO products (name, producer, genre, price, discription, release_date)VALUES(?,?,?,?,?.?)";
         $values = array($this->input->post('name'),$this->input->post('producer'),$this->input->post('genre'),$this->input->post('price'),$this->input->post('discription'),$this->input->post('release_date'));
         return $this->db->query($query,$values);
     }
     function reviews($val)
     {
        $query = "INSERT INTO reviews (comments)VALUES(?)";
        $values = array($this->input->post('comments'));
        return $this->db->query($query,$values);
     }
    
}

//every table should have a method within a class. the methods are the functions written inside of the class. 
//this file connects the what the user puts into the browser to the database.