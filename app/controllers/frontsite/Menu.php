<?php
class Menu extends Controller
{
public function index()
{
$data['title'] = 'Menu';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/menu/index', $data);
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}