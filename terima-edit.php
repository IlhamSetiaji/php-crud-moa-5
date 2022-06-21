<?php
include 'koneksi.php';
extract($_POST);
$id=$_GET['id'];
mysqli_query($koneksi,"UPDATE mahasiswa SET name='$name', nim='$nim', kelas='$kelas', gender='$gender' WHERE id=$id");

header('Location:index.php');
?>