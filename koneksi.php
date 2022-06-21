<?php
$servername = "localhost";
$username = "root";
$password = "ilham";
$database = "moa-batch-5";

$koneksi = mysqli_connect($servername, $username, $password,$database);

if(mysqli_connect_errno())
{
    echo "Koneksi gagal";
}
// echo "Koneksi sukses";  
?>