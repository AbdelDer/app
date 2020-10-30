<?php

//this class is just an exemple
class Xms{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database();    
    }

    public function getAllXMS() {
        $this->db->query("SELECT * FROM XMS");
        $results = $this->db->resultSet();
        return $results;
    }
}


?>