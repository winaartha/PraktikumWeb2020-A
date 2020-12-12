<?php

class Customer extends Controller
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
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/profil', $data);
        $this->view('template/footer');
    }

    public function update_profil()
    {
        if ($this->model('Customer_model')->update_profil($_POST, $this->id_user) > 0) {
            header('Location: ' . BASE_URL . '/customer');
            exit;
        }
    }

    public function ubah_sandi()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/ubah_sandi');
        $this->view('template/footer');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/pembayaran');
        $this->view('template/footer');
    }

    public function halaman_bayar()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/halaman_bayar');
        $this->view('template/footer');
    }

    public function pemesanan()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/pemesanan');
        $this->view('template/footer');
    }

    public function riwayat()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/riwayat');
        $this->view('template/footer');
    }


    public function lihat_vendor()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/lihat_vendor');
        $this->view('template/footer');
    }

    public function sewa_barang()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/sewa_barang');
        $this->view('template/footer');
    }
}
