<?php

class Daftar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar';
        $this->view('template/header', $data);
        $this->view('daftar');
    }
}
