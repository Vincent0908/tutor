<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "tutorial";

    $db = mysqli_connect($hostname, $username, $password, $db_name);

    if ($db->connect_error) {
    echo "database koneksi error " ;
    die("error!");
}
   
?>
