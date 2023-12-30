<?php

class LoginModel {

    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function auth($data) {
        $sql = "SELECT * FROM ". $this->table . " WHERE username = :username AND password = :password";

        $this->db->query($sql);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->single();
    }

}