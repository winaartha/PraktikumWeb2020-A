<?php

class Home extends Controller
{
    private $id_user;
    public function __construct()
    {
        if (isset($_SESSION['id_user'])) {
            $this->id_user = $_SESSION['id_user'];
        }
    }
    public function index()
    {

        $data['judul'] = 'Home';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }

    public function about()
    {
        $data['judul'] = 'Tentang Kami';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('about/index');
        $this->view('template/footer');
    }
}
