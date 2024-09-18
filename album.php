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
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang di album <?=$_SESSION['namalengkap']?></h1>
    <ul>
        <li>
            <a href="home.php">home</a>
        </li>
        <li>
            <a href="album.php">album</a>
        </li>
        <li>
            <a href="foto.php">foto</a>
        </li>
        <li>
            <a href="logout.php">logout</a>
        </li>
    </ul>
 
    <h1>silahkan tambah album</h1>
    <form action="proses_album.php" method="post">
        <table>
            <tr>
                <td>Nama album : </td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi : </td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
            <td></td>
                <td><input type="reset" value="reset">
                <input type="submit" value="tambah"></td>
            </tr>
        </table>
    </form>
 
    <table cellpadding="2" cellspacing="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $id=$_SESSION['id'];
            $sql=mysqli_query($conn, "SELECT * FROM album where id='$id'");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['albumid']?></td>
                <td><?=$data['namaalbum']?></td>
                <td><?=$data['deskripsi']?></td>
                <td><?=$data['tanggaldibuat']?></td>
                <td>
                    <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                    <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>