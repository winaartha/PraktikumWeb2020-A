<?php

session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['role'] == "admin")
        header("Location: admin.php");
    else
        header("Location: index.php");
    exit;
}

require "function.php";
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user INNER JOIN role using (id_role) WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            //set session
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama_user'];
            $_SESSION['role'] = $row['nama_role'];

            //pindah halaman
            if ($_SESSION['role'] == "admin")
                header("Location: admin.php");
            else
                header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="content">
        <div class="form-login">
            <h1 class="title">Login</h1>
            <?php if (isset($error)) echo '<p class="error">username atau password salah</p>' ?>
            <form action="" method="POST">
                <ul>
                    <li>
                        <input type="text" name="username" id="username" placeholder="Username" autofocus>
                    </li>
                    <li>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </li>
                    <li>
                        <button type="submit" name="login" class="btn info center" style="
                            position:absolute;
                            margin-left:8%;
                        ">Login</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>