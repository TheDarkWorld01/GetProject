<?php
include('koneksi.php');
if(isset($_POST['submit'])){
    $nama      = htmlentities(strip_tags(trim($_POST["nama"])));
    $email     = htmlentities(strip_tags(trim($_POST["email"])));
    $hp        = htmlentities(strip_tags(trim($_POST["hp"])));
    $lembaga   = htmlentities(strip_tags(trim($_POST["lembaga"])));
    $alamat    = htmlentities(strip_tags(trim($_POST["alamat"])));
    $provinsi  = htmlentities(strip_tags(trim($_POST["provinsi"])));
    $kota      = htmlentities(strip_tags(trim($_POST["kota"])));
    $kecamatan = htmlentities(strip_tags(trim($_POST["kecamatan"])));
    $tgl       = htmlentities(strip_tags(trim($_POST["tgl"])));
    $materi    = htmlentities(strip_tags(trim($_POST["materi"])));
    $sekolah   = htmlentities(strip_tags(trim($_POST["sekolah"])));
    $peserta   = htmlentities(strip_tags(trim($_POST["peserta"])));
    $tagihan   = htmlentities(strip_tags(trim($_POST["tagihan"])));
    $wa        = htmlentities(strip_tags(trim($_POST["wa"])));

    $insert    = mysqli_query($conn,"INSERT INTO `user`(`nama`, `email`, `no_hp`, `lembaga`, `alamat`, `provinsi`, `kota`, `kecamatan`, `tgpelaksanaan`, `materi`, `sekolah`, `jmlpeserta`, `tagihan`, `wa`) VALUES ('$nama','$email','$hp','$lembaga','$alamat','$provinsi','$kota','$kecamatan','$tgl','$materi','$sekolah','$peserta','$tagihan','$wa')");
    if($insert){
        header("location: home?alert=sukses");
    }else{
        header("location: home?alert=gagal");
    }
}
?>