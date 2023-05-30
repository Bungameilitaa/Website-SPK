<?php
include "koneksi_spk.php";
$w1=$_POST['w1'];
$w2=$_POST['w2'];
$w3=$_POST['w3'];
$sql="UPDATE bobot set w1='$w1',w2='$w2',w3='$w3'";

mysqli_query($koneksi,$sql);
header("location:../index.php?halaman=bobot&pesan=1");
?>