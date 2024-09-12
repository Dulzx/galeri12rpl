<?php
include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($conn, "INSERT INTO user (username, password, namalengkap, alamat) VALUES ('$username', '$password', '$namalengkap', '$alamat')");

if ($sql) {
    header("Location: login.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
