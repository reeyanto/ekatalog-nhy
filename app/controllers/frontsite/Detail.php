<?php
class About extends Controller
{
public function index() {
        $data['title'] = 'Detail';
        $data['produk'] = $this->model('ProdukModel')->getAllProduk();
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/templates/header', $data);
        $this->view('frontsite/detail/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    } 
}