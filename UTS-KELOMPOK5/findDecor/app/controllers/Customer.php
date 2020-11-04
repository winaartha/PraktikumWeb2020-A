<?php

class Customer extends Controller
{
    public function index()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/profil');
        $this->view('template/footer');
    }

    public function halaman_bayar()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/halaman_bayar');
        $this->view('template/footer');
    }

    public function riwayat()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/riwayat');
        $this->view('template/footer');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/pembayaran');
        $this->view('template/footer');
    }

    public function pemesanan()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/pemesanan');
        $this->view('template/footer');
    }

    public function profil()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/profil');
        $this->view('template/footer');
    }

    public function ubah_sandi()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/ubah_sandi');
        $this->view('template/footer');
    }

    public function lihat_vendor()
    {
        $data['judul'] = 'Customer';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('customer/lihat_vendor');
        $this->view('template/footer');
    }
}
