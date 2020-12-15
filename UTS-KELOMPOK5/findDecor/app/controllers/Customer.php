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
        $data['bayar'] = $this->model('Customer_model')->getbayar($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/pembayaran', $data);
        $this->view('template/footer');
    }

    // 
    public function halaman_bayar($id_bayar)
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['bayar'] =  $this->model('Customer_model')->detail_bayar($id_bayar);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/halaman_bayar', $data);
        $this->view('template/footer');
    }

    public function bayar($id_bayar)
    {
        if ($this->model("Customer_model")->update_pembayaran($_POST, $id_bayar, $this->id_user) > 0) {
            header('Location: ' . BASE_URL . '/customer/pemesanan');
            exit;
        }
    }

    public function pemesanan()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['pesan'] = $this->model('Customer_model')->getpesan($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/pemesanan', $data);
        $this->view('template/footer');
    }

    public function riwayat()
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['riwayat'] = $this->model('Customer_model')->getinvoice($this->id_user);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/riwayat', $data);
        $this->view('template/footer');
    }


    public function lihat_vendor($vendor_id)
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['vendor'] = $this->model('Customer_model')->detail_vendor($vendor_id);
        $data['barang'] = $this->model('Customer_model')->getbarang($vendor_id);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/lihat_vendor', $data);
        $this->view('template/footer');
    }

    public function sewa_barang($id_barang)
    {
        $data['judul'] = 'Customer';
        $data['user'] = $this->model('Vendor_model')->getuser($this->id_user);
        $data['barang'] = $this->model('Customer_model')->detail_barang($id_barang);
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('customer/sewa_barang', $data);
        $this->view('template/footer');
    }

    public function pesan_barang($id_barang)
    {
        if ($this->model("Customer_model")->buatpesanan($_POST, $id_barang, $this->id_user) > 0) {
            header('Location: ' . BASE_URL . '/customer/pembayaran');
            exit;
        }
    }
}
