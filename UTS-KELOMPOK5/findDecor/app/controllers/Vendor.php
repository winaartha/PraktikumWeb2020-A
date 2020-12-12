<?php

class Vendor extends Controller
{
    private $id_user;
    public function __construct()
    {
        if (isset($_SESSION['id_user'])) {
            $this->id_user = $_SESSION['id_user'];
        }
    }
    // INDEX VENDOR START
    public function index()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/index', $data);
        $this->view('template/footer');
    }

    public function update_profil()
    {
        if ($this->model('Vendor_model')->update_profil($_POST, $this->id_user) > 0) {
            header('Location: ' . BASE_URL . '/customer');
            exit;
        }
    }


    // BARANG START
    public function daftar_barang()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['barang'] = $this->model('Vendor_model')->getbarang($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/daftar_barang', $data);
        $this->view('template/footer');
    }

    public function tambah_barang()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/tambah_barang');
        $this->view('template/footer');
    }

    public function simpan_barang()
    {
        if ($this->model('Vendor_model')->tambah_barang($_POST, $this->id_user) > 0) {
            header('Location: ' . BASE_URL . '/vendor/daftar_barang');
            exit;
        }
    }

    public function detail_barang($id_barang)
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['barang'] = $this->model('Vendor_model')->getdetailbrg($id_barang);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/detail_barang', $data);
        $this->view('template/footer');
    }

    public function update_barang($id_barang)
    {
        if ($this->model('Vendor_model')->update_barang($_POST, $id_barang) > 0) {
            header('Location: ' . BASE_URL . '/vendor/daftar_barang');
            exit;
        }
    }

    public function hapus_barang($id_barang)
    {
        if ($this->model('Vendor_model')->hapus_barang($id_barang) > 0) {
            header('Location: ' . BASE_URL . '/vendor/daftar_barang');
            exit;
        }
    }

    // PEMBAYARAN START
    public function pembayaran()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/pembayaran');
        $this->view('template/footer');
    }

    // PESANAN START
    public function pesanan()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/pesanan');
        $this->view('template/footer');
    }

    public function detail_pesanan()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/detail_pesanan');
        $this->view('template/footer');
    }

    // INVOICE START
    public function invoice()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/invoice');
        $this->view('template/footer');
    }

    public function detail_invoice()
    {
        $data['judul'] = 'Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/detail_invoice');
        $this->view('template/footer');
    }

    // REGIS VENDOR
    public function daftar_vendor($id_user)
    {
        $data['judul'] = 'Daftar Vendor';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('vendor/daftar_vendor');
        $this->view('template/footer');
    }
}
