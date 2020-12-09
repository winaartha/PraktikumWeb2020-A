<?php

class Vendor_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function ambilbarang()
    {
        $this->db->query("SELECT * FROM barang");
        return $this->db->resultAll();
    }
}
