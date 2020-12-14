<?php

class Admin_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getuser($id_user)
    {
        $query = "SELECT * FROM user WHERE id_user = '$id_user'";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    // Ambil Customer
    public function getcustomer()
    {
        $query =  "SELECT * FROM user WHERE role_id = 3";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = $this->db->resultAll($result);
        return $result;
    }

    // Hapus Customer & Vandor
    public function hapususer($id_user)
    {
        $query =  "DELETE FROM user WHERE id_user = $id_user";
        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }


    public function getvendor()
    {
        $query =  "SELECT * FROM user WHERE role_id = 2";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = $this->db->resultAll($result);
        return $result;
    }

    public function getbarang()
    {
        $query =    "SELECT barang.*, user.nama_vendor as nama_vendor 
                    FROM barang JOIN user
                    ON barang.vendor_id = user.id_user";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = $this->db->resultAll($result);
        return $result;
    }
}
