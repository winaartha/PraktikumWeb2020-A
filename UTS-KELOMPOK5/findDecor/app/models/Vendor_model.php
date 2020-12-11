<?php

class Vendor_model extends Controller
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
        $rows = mysqli_fetch_assoc($result);
        return $rows;
    }

    public function getbarang($id_user)
    {
        $query = "SELECT * FROM barang WHERE vendor_id = '$id_user'";
        $result = mysqli_query($this->db->koneksi, $query);
        $rows = $this->db->resultAll($result);
        return $rows;
    }
}
