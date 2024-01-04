<?php
class UserModel {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUser() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahUser($data) {

        $query = "INSERT INTO user (nama, username, password) VALUES (:nama, :username, :passwor,)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateUser($data) {

        $query = "INSERT INTO user (nama, username, password ) VALUES (:nama, :username, :password)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama', $data['nama']);

        $query = "INSERT INTO user (nama_pengguna, username, password, photo) VALUES (:nama_pengguna, :username, :password, :photo)";
        $this->db->query($query);
        $this->db->bind('nama_pengguna', $data['nama_pengguna']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('photo', $data['photo']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteUser($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariUser() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_pengguna LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}