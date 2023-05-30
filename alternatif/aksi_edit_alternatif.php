<?php
$id_alternatif=$_POST['id_alternatif'];
$nama_objek =$_POST['nama_objek'];
include "koneksi_spk.php";
$sql="UPDATE alternatif set nama_objek = '$nama_objek'";
$sql .= "WHERE id_alternatif ='$id_alternatif'";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if(!$hasil){
    die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

}else{
    echo "<script>alert('data berhasil ditambahkan.'); window.location='index.php'; </script>";
}

?>
