<?php
include "koneksi_spk.php";
$sql="SELECT max(c1) as max_c1, max(c2) as max_c2, max(c3) as max_c3 from kriteria";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
$max_c1=$row['max_c1'];
$max_c2=$row['max_c2'];
$max_c3=$row['max_c3'];

$sql=" SELECT * from bobot";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
$w1=$row['w1'];
$w2=$row['w2'];
$w3=$row['w3'];

$sql="SELECT * from kriteria";
$hasil=mysqli_query($koneksi,$sql);
$i=0;
while ($row=mysqli_fetch_array($hasil)) {
 $id_kriteria[$i]=$row['id_kriteria'];
 $c1_normalisasi=round(($row['c1']/$max_c1),2);
 $c2_normalisasi=round(($row['c2']/$max_c2),2);
 $c3_normalisasi=round(($row['c3']/$max_c3),2);

 $skor[$i]=round((($w1*$c1_normalisasi)+($w2*$c2_normalisasi)+($w3*$c3_normalisasi)),3);
 $i++;
}

$x=0;

foreach ($skor as $key => $value) {
 $sql="UPDATE kriteria set skor='$value' where id_kriteria='$id_kriteria[$x]'";
 mysqli_query($koneksi,$sql);
 $x++;
 echo "$sql";
 echo "<br>";
}
header("location:../index.php?halaman=rangking");
?>