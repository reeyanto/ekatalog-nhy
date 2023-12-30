<?php

class Login extends Controller {

    public function index() {
        $this->view('frontsite/login/form');
    }


    public function login() {
        $login = $this->model('LoginModel')->auth($_POST);

        if($login != null) {
            Session::set('nama', $login['nama']);
            header('location:'. BASEURL . '/backsite/dashboard');
        }
        else {
            Flasher::setMessage('username atau password', 'salah', 'danger');
            header('location:'. BASEURL . '/frontsite/login');
        }
    }

    public function logout() {
        Session::destroy();
        header('location:'. BASEURL);
    }
}