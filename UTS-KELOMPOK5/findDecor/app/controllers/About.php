<?php

class About extends Controller
{
    public function index()
    {
        $data['judul'] = 'Tentang Kami';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('about/index');
        $this->view('template/footer');
    }
}
