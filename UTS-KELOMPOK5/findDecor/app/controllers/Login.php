<?php

class Login extends Controller
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
        if ($this->model("Auth_model")->ceklogin($_POST) > 0) {
            header('Location: ' . BASE_URL . '/Admin');
            exit;
        }
    }
}
