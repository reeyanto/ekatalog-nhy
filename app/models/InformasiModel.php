<?php
class PortfolioModel {
    private $table = 'portfolio';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPortfolio() { 
        $this->db->query("SELECT portfolio.*, album.nama FROM " . $this->table . " JOIN album ON album.id = portfolio.id_album");
        return $this->db->resultSet();
    }

    public function getPortfolioById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPortfolio($data) {
        $query = "INSERT INTO portfolio (judul, id_album, keterangan, photo) VALUES (:judul, :id_album, :keterangan, :photo)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('id_album', $data['id_album']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('photo', $data['photo']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePortfolio($data) {
        $query = "UPDATE Portfolio SET judul=:judul, id_album=:id_album, keterangan=:keterangan, photo=:photo WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('id_album', $data['id_album']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('photo', $data['photo']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePortfolio($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariPortfolio() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}