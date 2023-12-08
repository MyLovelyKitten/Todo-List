<?php

$localhost="localhost";
$username="root";
$password="";
$database="tugas";

$koneksi = mysqli_connect($localhost,$username,$password,$database);
if (!$koneksi){
        die("Koneksi Gagal:".mysqli_connect_error());        
}
?>
