<?php

class Auth_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getuser($id_user)
    {
        $result = mysqli_query($this->db->koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function registrasi()
    {
        $email = htmlspecialchars($_POST['email']);
        $notelp = htmlspecialchars($_POST['notelp']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);
        $role_id = 3;

        $result = mysqli_query($this->db->koneksi,  "SELECT email FROM user WHERE email = '$email'");
        if (mysqli_fetch_assoc($result)) {
            return false;
        }

        if ($password != $password2) {
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);


        $query = "INSERT INTO user (username, email, notelp, role_id, password) VALUES ('$username','$email', '$notelp', '$role_id', '$password')";

        mysqli_query($this->db->koneksi, $query);
        return mysqli_affected_rows($this->db->koneksi);
    }

    public function ceklogin()
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $result = mysqli_query($this->db->koneksi, "SELECT * FROM user WHERE email = '$email'");

        var_dump($result);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {

                $_SESSION["id_user"] = $row['id_user'];
                $role_id = $row['role_id'];

                return $role_id;
            }
        }

        echo mysqli_error($this->db->koneksi);
    }
}
