<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di halaman album</title>
</head>
<body>
    <h1>Halaman Album</h1>

    <ul>
        <li>
            <a href="home.php">Home</a>
        </li>

        <li>
            <a href="album.php">Album</a>
        </li>

        <li>
            <a href="foto.php">Foto</a>
        </li>

        <li>
            <a href="logout.php">Logout</a>
        </li>
    </ul>
  </body>
 </html>