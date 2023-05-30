<?php include "koneksi_spk.php";
$nama_objek =$_POST['nama_objek'];
$sql ="INSERT INTO alternatif(nama_objek) VALUES ('$nama_objek')";
            $hasil =mysqli_query($koneksi,$sql);
            if(!$hasil){
                die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

            }else{
                echo "<script>alert('data berhasil ditambahkan.'); window.location='index.php'; </script>";
            }
    
?>