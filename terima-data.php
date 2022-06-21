<?php
include 'koneksi.php';
extract($_POST);
mysqli_query($koneksi,"INSERT INTO mahasiswa (name, nim, kelas, gender)
VALUES ('$name', '$nim', '$kelas', '$gender')");

header('Location:index.php');
?>