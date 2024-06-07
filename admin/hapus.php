<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
$name =$_get['name'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_update where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tambahdata.php");
 
?>