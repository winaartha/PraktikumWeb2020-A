<?php

class Auth extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login');
    }

    public function ceklogin()
    {
        $login = $this->model("Auth_model")->ceklogin($_POST);
        if ($login == 1) {
            header('Location: ' . BASE_URL . '/admin');
            exit;
        } else if ($login == 2) {
            header('Location: ' . BASE_URL . '/vendor');
            exit;
        } else if ($login == 3) {
            header('Location: ' . BASE_URL . '/home');
            exit;
        } else {
            header('Location: ' . BASE_URL . '/auth');
            exit;
        }
    }

    public function registrasi()
    {
        $data['judul'] = 'Daftar';
        $this->view('template/header', $data);
        $this->view('daftar');
    }

    public function simpanregis()
    {
        if ($this->model("Auth_model")->registrasi($_POST) > 0) {
            header('Location: ' . BASE_URL . '/auth');
            exit;
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL . '/Home');
        exit;
    }
}
