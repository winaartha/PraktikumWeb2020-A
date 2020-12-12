<?php include "templates/_header.php" ?>

<h1>Login</h1>
<form action="" method="POST">
    <ul>
        <li>
            <input type="text" name="username" id="username" placeholder="Username" autofocus>
        </li>
        <li>
            <input type="password" name="password" id="password" placeholder="Password">
        </li>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </ul>
</form>

<?php include "templates/_footer.php" ?>