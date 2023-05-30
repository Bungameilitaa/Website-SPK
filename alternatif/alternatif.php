<?php
include "koneksi_spk.php";
$slq="SELECT*FROM alternatif";
$hasil=mysqli_query($koneksi,$slq);
?>
<!DOCTYPE html>
<html>
    <style>
        h2{
            text-transform: uppercase;
            color:black;
        }
        table{
            border: 1px solid grey;
            border-collapse: collapse;
            border-spacing: 15;
            width: 90%;
            margin:10px auto 10px auto;
        }
        table tbody td{background-color: gainsboro;
            border: 1px solid grey;
            color: #336b6b;
            padding: 10px;
            text-align: left;
            text-shadow:1px 1px 1px #fff;
            }
        td{
            border: 1px solid grey;
        }
    </style>
    <head>
        <body>
        <div class="col-10">
        <center><h2>Tabel Data Alternatif</h2></center><br>
        <center><a href="tambah_alternatif.php">
            <input style="float: center;" type="button" class="btn btn-primary" value="Tambah" name="" style="margin-bottom:8px ">
        </a></center>
 
        <center><table class="table table-bordered">
    <thead>   
        <tr style="font-weight: bold">
        <td width="5%">No.</td>
        <td width="30%">Nama</td>
        <td width="15%">Aksi</td>
        </tr>
    </thead>
    <tbody>
    </head>
   <?php
   $no=1;
   while ($row=mysqli_fetch_array($hasil)) {
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['nama_objek']?></td>
    <td>
     <a href="edit_alternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>">
     <input type="button" value="Edit" class="btn btn-warning" name="">
     </a>
     <a onclick="return confirm('Kamu Yakin?')" href="aksi_hapus_alternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>">
     <input type="button" value="Hapus" class="btn btn-danger" name="">
     </a>
    </td>
   </tr>
   <?php
   }
   ?>
  </tbody>
 </table>
</center>
</div>