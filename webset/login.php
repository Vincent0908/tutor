<?php
    include "database/database.php";
    session_start();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM data WHERE username = '$username' AND email = '$email' AND password = '$password' ";
        $result = $db->query($sql);

        if ($result->num_rows > 0 ) {
            $data = $result->fetch_assoc();
            $_SESSION['username'] = $data['username'];
            header("location: dashboard.php");
            echo "anda berhasil login";
        } else {
            echo "anda gagal login";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pendaftaran</title>
</head>
<body>
    <h2>Selamat datang</h2>
    <nav>
        <a href="index.php">HOME</a>
        <a href="register.php">REGISTER</a>
        <a href="login.php">LOGIN</a>
    </nav>
    <section>
        <h2>Silahkan Login</h2>
        <form action="login.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username">
    <br>
            <label for="">Email</label>
            <input type="email" name="email">
<br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br>
            <button type="submit" name="login">LOGIN SEKARANG</button>
        </form>
    </section>
</body>
</html>