<?php
include "koneksi.php";
 
session_start();
$namaalbum=$_POST['namaalbum'];
$deskripsi=$_POST['deskripsi'];
$tanggaldibuat=date('Y-m-d');
$id=$_SESSION['id'];
 
$sql=mysqli_query($conn, "insert into album values ('','$namaalbum', '$deskripsi', '$tanggaldibuat', '$id')");
 
if($sql) {
    header("location: album.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>