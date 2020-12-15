<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require "function.php";
if (isset($_POST['add'])) {
    doAdd($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content">
        <div class="form-input">
            <h1 class="title">Input Mahasiswa</h1>
            <form action="" method="POST">
                <ul>
                    <li>
                        <label for="nim">NIM :</label><br>
                        <input type="text" name="nim" id="nim" required>
                    </li>
                    <li>
                        <label for="nama">Nama :</label><br>
                        <input type="text" name="nama" id="nama" required>
                    </li>
                    <li>
                        <label for="alamat">Alamat :</label><br>
                        <input type="text" name="alamat" id="alamat" required>
                    </li>
                    <li>
                        <a href="javascript:history.back()" class="btn normal" style="
                            position: absolute;
                            margin-top:12px;
                            ">Back</a>
                        <button type="submit" name="add" class="btn primary right">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>