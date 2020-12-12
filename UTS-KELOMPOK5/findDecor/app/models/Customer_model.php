<?php

class Customer_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function update_profil($data, $id_user)
    {
        $username = htmlspecialchars($data['username']);
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $notelp = htmlspecialchars($data['notelp']);

        $query = "UPDATE user SET username = '$username', nama = '$nama', email = '$email', notelp = '$notelp' WHERE id_user = $id_user";
        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }
}
