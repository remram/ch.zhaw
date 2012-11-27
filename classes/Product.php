<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author ramy
 */
class Product {
    private $id;
    private $name;
    private $description;
    private $prize;
    private $date;
    
    private $host;
    private $user;
    private $pass;
    private $dbName;
    
    private $db;


    public function __construct($host, $user, $pass, $dbName) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbName = $dbName;
    }
    
    public function openDB() {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_errno()) {
            die('DB Connection error code['.mysqli_connect_errno().']:
        '.mysqli_connect_error());
        }
    }
    
    public function closeDB() {
        $this->db->close();
    }
    
    public function setID($id) {
        $this->id = $id;
    }
    
    public function getID() {
        return $this->id;
    }
    
    public function add($name, $description, $prize, $date) {
        
    }
    
    public function delete() {
        
    }
    
    public function view() {
        $results = $this->db->query("SELECT * FROM  `product`;");
    }





    /*public function setName($name) {
        $this->name = $name;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function set*/
}

?>
