<?php
include 'koneksi.php';
extract($_POST);
$id=$_GET['target'];
mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id=$id");

header('Location:index.php');
?>