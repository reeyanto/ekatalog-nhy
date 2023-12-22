<?php
class About extends Controller
{
public function index()
{
$data['title'] = 'About';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/about/index', $data);
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}