<?php
    class Controller {

        public function view($view, $data = []) {
            require_once '../app/views/' . $view . '.php';
        }
        public function model($model) 
        {
            require_once '../app/models/' . $model . '.php';
            return new $model;
        }
        public function show($id) {
            // Gunakan ID yang diterima untuk mengambil informasi detail produk dari Model
            $produk = $this->ProdukModel->getProdukById($id);
        
            // Kirim informasi produk ke View
            $this->load->view('detail_produk', ['produk' => $produk]);
        }
        

}
