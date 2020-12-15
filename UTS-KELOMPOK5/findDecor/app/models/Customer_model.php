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

    public function detail_vendor($vendor_id)
    {
        $query = mysqli_query($this->db->koneksi, "SELECT nama_vendor, notelp, alamat from user where id_user = $vendor_id");
        $result = mysqli_fetch_assoc($query);
        return $result;
    }

    public function getbarang($vendor_id)
    {
        $query = mysqli_query($this->db->koneksi, "SELECT * from barang where vendor_id = $vendor_id");
        $result = $this->db->resultAll($query);
        return $result;
    }

    public function detail_barang($id_barang)
    {
        $query = "SELECT barang.*, user.nama_vendor as nama_vendor, user.notelp as notelp, user.alamat as alamat
                FROM barang JOIN user 
                ON barang.vendor_id = user.id_user
                WHERE id_barang = $id_barang";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    public function buatpesanan($data, $id_barang, $user_id)
    {
        $barang =  mysqli_query($this->db->koneksi, "SELECT * FROM barang where id_barang = $id_barang");
        $barang = mysqli_fetch_assoc($barang);
        $barang_id = $barang['id_barang'];
        $hargabrg = $barang['harga_barang'];

        $tgl_pinjam = htmlspecialchars($data['tglpinjam']);
        $tgl_kembali = htmlspecialchars($data['tglkembali']);
        $alamat = htmlspecialchars($data['alamat']);
        $kab = htmlspecialchars($data['kabupaten']);
        $kec = htmlspecialchars($data['kecamatan']);
        $catatan = htmlspecialchars($data['catatan']);
        $status = 'Belum Bayar';

        $query = "INSERT INTO pembayaran (barang_id, harga_barang, tgl_pinjam, tgl_kembali, user_id, alamat_kirim, kab_kirim, kec_kirim, catatan, status_bayar) VALUES ('$barang_id','$hargabrg', '$tgl_pinjam', '$tgl_kembali', '$user_id', '$alamat', '$kab', '$kec', '$catatan', '$status')";
        // var_dump($query);

        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }

    public function getbayar($id_user)
    {
        $query = "SELECT pembayaran.*, user.nama_vendor as nama_vendor, barang.nama_barang as nama_barang
        FROM pembayaran JOIN barang 
        ON pembayaran.barang_id = barang.id_barang
        JOIN user 
        ON barang.vendor_id = user.id_user
        WHERE user_id = $id_user AND status_bayar = 'Belum Bayar'";
        $result = mysqli_query($this->db->koneksi, $query);
        $result = $this->db->resultAll($result);
        return $result;
    }
}
