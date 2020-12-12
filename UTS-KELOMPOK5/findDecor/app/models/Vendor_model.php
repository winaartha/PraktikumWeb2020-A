<?php

class Vendor_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // INDEX VENDOR START
    public function getuser($id_user)
    {
        $query = "SELECT * FROM user WHERE id_user = '$id_user'";
        $result = mysqli_query($this->db->koneksi, $query);
        $rows = mysqli_fetch_assoc($result);
        return $rows;
    }

    public function update_profil($data, $id_user)
    {
        $nama = htmlspecialchars($data['vendor']);
        $notelp = htmlspecialchars($data['notelp']);
        $alamat = htmlspecialchars($data['alamat']);
        $kecamatan = htmlspecialchars($data['kecamatan']);
        $kabupaten = htmlspecialchars($data['kabupaten']);
        $bni = htmlspecialchars($data['bni']);
        $bca = htmlspecialchars($data['bca']);
        $bri = htmlspecialchars($data['bri']);
        $deskripsi = htmlspecialchars($data['deskripsi']);

        $query = "UPDATE user SET nama_vendor = '$nama', notelp = '$notelp', alamat = '$alamat', kecamatan = '$kecamatan', kabupaten = '$kabupaten', bni = '$bni', bca = '$bca', bri = '$bri', deskripsi_vendor = '$deskripsi'  WHERE id_user = $id_user";
        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }


    // BARANG START
    public function getbarang($id_user)
    {
        $query = "SELECT * FROM barang WHERE vendor_id = '$id_user'";
        $result = mysqli_query($this->db->koneksi, $query);
        $rows = $this->db->resultAll($result);
        return $rows;
    }

    public function tambah_barang($data, $user_id)
    {
        $namabrg = htmlspecialchars($data['namabrg']);
        $hargabrg = htmlspecialchars($data['hargabrg']);
        $deskripsibrg = htmlspecialchars($data['deskripsibrg']);

        $query = "INSERT INTO barang (nama_barang, harga_barang, deskripsi_barang, vendor_id) VALUES ('$namabrg','$hargabrg', '$deskripsibrg', '$user_id')";

        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }

    public function getdetailbrg($id_brg)
    {
        $query = "SELECT * FROM barang WHERE id_barang = $id_brg";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    public function update_barang($data, $id_barang)
    {
        $namabrg = htmlspecialchars($data['namabrg']);
        $hargabrg = htmlspecialchars($data['hargabrg']);
        $deskripsibrg = htmlspecialchars($data['deskripsibrg']);

        $query = "UPDATE barang SET nama_barang = '$namabrg', harga_barang = '$hargabrg', deskripsi_barang = '$deskripsibrg' WHERE id_barang = $id_barang ";
        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }

    public function hapus_barang($id_barang)
    {
        $query = "DELETE FROM barang WHERE id_barang  = $id_barang";
        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }
}
