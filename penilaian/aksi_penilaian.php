<?php
if (isset($_POST['simpan'])) {
 include "koneksi_spk.php";
 $jumlah=$_POST['jumlah'];
 for ($i=0; $i <$jumlah ; $i++) { 
  $temp_id_alternatif="id_alternatif".$i;
  $temp_id_kriteria="id_kriteria".$i;
  $temp_c1="c1".$i;
  $temp_c2="c2".$i;
  $temp_c3="c3".$i;

  $fix_id_alternatif= $_POST[$temp_id_alternatif];
  $fix_id_kriteria= $_POST[$temp_id_kriteria];
  $fix_c1= $_POST[$temp_c1];
  $fix_c2= $_POST[$temp_c2];
  $fix_c3= $_POST[$temp_c3];

  $sql="SELECT * from kriteria where id_kriteria='$fix_id_kriteria'";
  //echo "$sql";
  $hasil=mysqli_query($koneksi,$sql);
  if (mysqli_num_rows($hasil)<=0) {
   $sql="INSERT INTO kriteria(id_alternatif,c1,c2,c3) values('$fix_id_alternatif','$fix_c1','$fix_c2','$fix_c3')";
   mysqli_query($koneksi,$sql);
   //echo "$sql";
  }else{
   $sql="UPDATE kriteria set c1='$fix_c1', c2='$fix_c2', c3='$fix_c3' where id_kriteria='$fix_id_kriteria'";
   //echo "$sql";
   mysqli_query($koneksi,$sql);
  }
 }
 
}
header("location:../index.php?halaman=data");
?>