<?php 
include "koneksi_spk.php";
$slq="SELECT `spk`.`alternatif`.`id_alternatif` AS `id_alternatif`,`spk`.`alternatif`.`nama_objek` AS `nama_objek`,`spk`.`kriteria`.`c1` AS `c1`,`spk`.`kriteria`.`c2` AS `c2`,`spk`.`kriteria`.`c3` AS `c3`,`spk`.`kriteria`.`id_kriteria` AS `id_kriteria` from (`spk`.`alternatif` left join `spk`.`kriteria` on((`spk`.`alternatif`.`id_alternatif` = `spk`.`kriteria`.`id_alternatif`)))";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="col-10">
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
<br>
 <center><h2> &nbsp;Tabel Penilaian Alternatif</h2><br><br></center>
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="18%">Nama</td>
    <td width="13%">jarak</td>
    <td width="13%">harga tiket</td>
    <td width="13%">fasilitas</td>
    
   </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   $i=0;
   while ($row=mysqli_fetch_array($hasil)) { 
   ?>
   <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $row['nama_objek']?></td>
    <form action="aksi_penilaian.php" method="POST">
    <td>
     <input type="hidden" value="<?php echo $row['id_alternatif'] ?>" name="id_alternatif<?php echo $i;?>">
     <input type="hidden" value="<?php echo $row['id_kriteria'] ?>" name="id_kriteria<?php echo $i;?>">
     <input required="" class="form-control" type="text" value="<?php echo $row['c1']?>" name="c1<?php echo $i;?>">
    </td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c2']?>" name="c2<?php echo $i;?>"></td>
    <td><input required="" class="form-control" type="text" value="<?php echo $row['c3']?>" name="c3<?php echo $i;?>"></td>   
   </tr>
   <?php
   $i++;
   }
   ?>
   <tr>
    <td colspan="6">
     <input type="hidden" name="jumlah" value="<?php echo $i?>">
     <input type="submit" value="simpan" class="btn btn-success" name="simpan">
    </td>
   </tr>
   </form>
  </tbody>
 </table>

</div>