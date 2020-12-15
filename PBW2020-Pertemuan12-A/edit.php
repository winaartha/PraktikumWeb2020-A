<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require "function.php";
if (isset($_POST['edit'])) {
    doEdit($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content">
        <div class="form-edit">
            <h1 class="title">Edit Mahasiswa</h1>
            <form action="" method="POST">

                <?php $id = $_GET['id'] ?>
                <?php $mhs = query(" SELECT * FROM mahasiswa WHERE id = $id")[0] ?>
                <ul>
                    <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
                    <li>
                        <label for="nim">NIM :</label><br>
                        <input type="text" name="nim" id="nim" value="<?= $mhs['nim'] ?>" required>
                    </li>
                    <li>
                        <label for="nama">Nama :</label><br>
                        <input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>" required>
                    </li>
                    <li>
                        <label for="alamat">Alamat :</label><br>
                        <input type="text" name="alamat" id="alamat" value="<?= $mhs['alamat'] ?>" required>
                    </li>
                    <li>
                        <a href="javascript:history.back()" class="btn normal" style="
                            position: absolute;
                            margin-top:12px;
                            ">Back</a>
                        <button type="submit" name="edit" class="btn primary right">Edit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>