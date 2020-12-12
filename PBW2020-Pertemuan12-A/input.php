<?php include "templates/_header.php" ?>

<h1>Input Mahasiswa</h1>
<form action="" method="POST">
    <ul>
        <li>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim">
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat" id="alamat">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </ul>
</form>

<?php include "_footer.php" ?>