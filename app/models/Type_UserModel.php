<?php
class Type_UserModel {
    private $table = 'type_user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllType_User() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getType_UserById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahType_User($data) {
        $query = "INSERT INTO type_user (nama_tipe) VALUES (:nama_tipe)";
        $this->db->query($query);
        $this->db->bind('nama_tipe', $data['nama_tipe']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateType_User($data) {
        $query = "UPDATE type_user SET nama_tipe=:nama_tipe WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_tipe', $data['nama_tipe']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteType_User($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariType_User() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_tipe LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}