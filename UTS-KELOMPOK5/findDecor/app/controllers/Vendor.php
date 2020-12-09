<?php

class Vendor extends Controller
{
    public function index()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/index');
        $this->view('template/footer');
    }

    public function daftar_barang()
    {
        $data['judul'] = 'Vendor';
        $data['barang'] = $this->model('Vendor_model')->ambilbarang();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/daftar_barang', $data);
        $this->view('template/footer');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/pembayaran');
        $this->view('template/footer');
    }

    public function pesanan()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/pesanan');
        $this->view('template/footer');
    }

    public function invoice()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/invoice');
        $this->view('template/footer');
    }

    public function detail_pesanan()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/detail_pesanan');
        $this->view('template/footer');
    }

    public function detail_invoice()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/detail_invoice');
        $this->view('template/footer');
    }

    public function tambah_barang()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/tambah_barang');
        $this->view('template/footer');
    }

    public function detail_barang()
    {
        $data['judul'] = 'Vendor';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('vendor/detail_barang');
        $this->view('template/footer');
    }
}
