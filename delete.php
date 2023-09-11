<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM user WHERE id='$id'");
if($query){
    header("location: home?alert=sukses_hapus");
}else{
    header("location: home?alert=gagal_hapus");
}

