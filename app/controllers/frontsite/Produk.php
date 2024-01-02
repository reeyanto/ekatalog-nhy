<?php
class Produk extends Controller
{
public function index()
{
$data['title'] = 'Produk';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/produk/index', $data);
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}