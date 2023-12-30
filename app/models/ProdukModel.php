<?php
class ProdukModel {
    private $table = 'produk';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProduk() { 
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProdukById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahProduk($data) {
        $query = "INSERT INTO produk (nama, deskripsi, harga, foto) VALUES (:nama, :deskripsi, :harga, :foto)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateProduk($data) {
        $query = "UPDATE produk SET   nama=:nama, deskripsi=:deskripsi, harga=:harga, foto=:foto  WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteProduk($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariProduk() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}