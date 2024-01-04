<?php
class Menu extends Controller
{
    public function index()
    {
        $data['title'] = 'Menu';
        $data['produk'] = $this->model('ProdukModel')->getAllProduk();
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/templates/header', $data);
        $this->view('frontsite/menu/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }


    public function detail($id) {
        
    } 
}