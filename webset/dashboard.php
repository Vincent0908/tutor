<?php
    session_start();

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang <?= $_SESSION['username'] ?></h1>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">LOGOUT</button>
    </form>
</body>
</html>