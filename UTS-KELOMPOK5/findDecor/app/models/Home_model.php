<?php

class Home_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getvendor()
    {
        $query = mysqli_query($this->db->koneksi, "SELECT id_user, nama_vendor from user where role_id = 2");
        $result = $this->db->resultAll($query);
        return $result;
    }
}
