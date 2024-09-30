<?php 
    include "database/database.php";

    if (isset($_POST['daftar'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO data (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($db->query($sql)) {
            echo "Data berhasil masuk";
            header ("location:login.php");
            exit;
        } else {
            echo "data gagal masuk";
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
        <h2>Silahkan daftar</h2>
        <form action="register.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username">
    <br>
            <label for="">Email</label>
            <input type="email" name="email">
<br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br>
            <button type="submit" name="daftar">DAFTAR SEKARANG</button>
        </form>
    </section>
</body>
</html>