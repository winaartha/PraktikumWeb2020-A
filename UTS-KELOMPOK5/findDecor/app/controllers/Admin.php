<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Admin';
        $this->view('template/head-admin', $data);
        $this->view('admin/admin');
    }

    public function data_vendor()
    {
        $data['judul'] = 'Data Vendor';
        $this->view('template/head-admin', $data);
        $this->view('admin/data_vendor');
    }

    public function data_customer()
    {
        $data['judul'] = 'Data Customer';
        $this->view('template/head-admin', $data);
        $this->view('admin/data_customer');
    }

    public function data_transaksi()
    {
        $data['judul'] = 'Data Transaksi';
        $this->view('template/head-admin', $data);
        $this->view('admin/data_transaksi');
    }

    public function profil_admin()
    {
        $data['judul'] = 'Profil';
        $this->view('template/head-admin', $data);
        $this->view('admin/profil_admin');
    }

    public function daftar_barang()
    {
        $data['judul'] = 'Daftar Barang';
        $this->view('template/head-admin', $data);
        $this->view('admin/daftar_barang');
    }
}