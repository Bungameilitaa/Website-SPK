<div class="col-10">
<?php
include "koneksi_spk.php";
$sql="SELECT * from kriteria where skor IS NULL";
$hasil=mysqli_query($koneksi,$sql);
if (mysqli_num_rows($hasil)>0) {
?>
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Pesan : </strong> Rangking Perlu diperbarui.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <a href="aksi_rangking.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Mulai"></a>
<?php
}else{
 ?>
 <a href="aksi_rangking.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button" name="" value="Perbarui!"></a>
<?php
}
$sql="SELECT `spk`.`alternatif`.`id_alternatif` AS `id_alternatif`,`spk`.`alternatif`.`nama_objek` AS `nama_objek`,`spk`.`kriteria`.`id_kriteria` AS `id_kriteria`,`spk`.`kriteria`.`skor` AS `skor` from (`spk`.`alternatif` left join `spk`.`kriteria` on((`spk`.`alternatif`.`id_alternatif` = `spk`.`kriteria`.`id_alternatif`))) order by skor desc";
$hasil=mysqli_query($koneksi,$sql);
?>
<style>
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
 <table class="table table-bordered">
  <thead>   
   <tr style="font-weight: bold">
    <td width="5%">No.</td>
    <td width="45%">Nama</td>
    <td width="50%">Skor</td>
    
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
    <form action="aksi_rangking.php" method="POST">
    <td>
     <?php echo $row['skor']?>
    </td>
   </tr>
   <?php
   $i++;
   }
   ?>
   
   </form>
  </tbody>
 </table>
</div>