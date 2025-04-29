<?php 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "aplikasi-sekolah";

$connect = mysqli_connect($host, $username, $password, $db_name);

if (!$connect) {
    die ('Failed to Connection Database');
}
?>