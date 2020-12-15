<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require "function.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content">
        <h1 class="title">Daftar Mahasiswa</h1>
        <p>Selamat datang, <?= $_SESSION['nama'] . ' ( ' . $_SESSION['role'] . ' )' ?></p>
        <a href="input.php" class="btn primary">Tambah Data</a>

        <table border="1" cellpadding="10" style="width: 100%; margin:10px 0px;">
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 10%;">NIM</th>
                <th style="width: 25%;">Nama</th>
                <th style="width: 45%;">Alamat</th>
                <th style="width: 15%;">Opsi</th>
            </tr>

            <?php $i = 0; ?>
            <?php $mahasiswa = query("SELECT * FROM mahasiswa"); ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td style="text-align: center;"><?= ++$i; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['alamat']; ?></td>
                    <td style="
                            display:flex;
                            align-items: center;
                            justify-content: center;
                        ">
                        <a href="edit.php?id=<?= $mhs['id'] ?>" class="opsi info">Edit</a>
                        <!-- <a href="delete.php?id=<?= $mhs['id'] ?>" class="opsi danger">Delete</a> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="logout.php" class="btn danger">Logout</a>
    </div>
</body>

</html>