<?php

$conn = mysqli_connect("localhost", "root", "", "praktikum12");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahData($data)
{
    global $conn;
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "INSERT INTO mahasiswa 
                VALUES
                ('', '$nim', '$nama', '$alamat')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusData($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = '$id'");

    return mysqli_affected_rows($conn);
}

function editData($data)
{
    global $conn;
    $id = $data['id'];
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE mahasiswa 
                SET
                    nim = '$nim',
                    nama = '$nama',
                    alamat = '$alamat'
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ruteBalik($js)
{
    if ($_SESSION['role'] == "admin")
        $js .= "document.location.href = 'admin.php';";
    else
        $js .= "document.location.href = 'index.php';";
    $js .= "</script>";
    return $js;
}

function doEdit($data)
{
    if (editData($data) > 0) {
        $js = "
            <script>
                alert('Data berhasil diubah !');
        ";
        $js = ruteBalik($js);
        echo $js;
    } else {
        $js = "
            <script>
                alert('Data gagal diubah !');
        ";
        $js = ruteBalik($js);
        echo $js;
    }
}

function doAdd($data)
{
    if (tambahData($data) > 0) {
        $js = "
            <script>
                alert('Data berhasil ditambahkan !');
        ";
        $js = ruteBalik($js);
        echo $js;
    } else {
        $js = "
            <script>
                alert('Data gagal ditambahkan !');
        ";
        $js = ruteBalik($js);
        echo $js;
    }
}
