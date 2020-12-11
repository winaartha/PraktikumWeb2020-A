<?php

class Daftar extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('template/header', $data);
        $this->view('daftar');
    }

    public function registrasi()
    {
        if ($this->model("Auth_model")->registrasi($_POST) > 0) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }
    }
}
