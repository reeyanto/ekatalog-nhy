<?php
class Gallery extends Controller
{
public function index()
{
$data['title'] = 'Gallery';
$this->view('frontsite/templates/style', $data);
$this->view('frontsite/templates/header', $data);
$this->view('frontsite/gallery/index', $data);
$this->view('frontsite/templates/footer');
$this->view('frontsite/templates/script');
}
}