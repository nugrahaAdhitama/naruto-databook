<?php

class Auth extends Controller {
    public function index()
    {
        $data['judul'] = "Login";
        $this->view('templates/header', $data);
        $this->view('auth/index', $data);
        $this->view('templates/footer', $data);
    }

    public function register()
    {
        $data['judul'] = "Register";
        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah(){
        if($this->model('Auth_model')->register($_POST) > 0) {
            echo "SUKSES";
        } else {
            echo "GAGAL";
        }
    }

    public function login() {
        if($this->model('Auth_model')->login($_POST) ) {
            echo "SUKSES";
            header("Location: " . BASEURL);
        } else {
            echo "GAGAL";
        }
    }
}