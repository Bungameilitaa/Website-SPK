<?php
include "koneksi_spk.php";
$sql="SELECT * from bobot";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
?>
<div class="col-10">
 <?php
 if (isset($_GET['pesan'])) {
 ?>
 <div class="alert alert-info alert-dismissible fade show" role="alert">
   <strong>Pesan : </strong> Bobot berhasil diperbarui.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div> 
 <?php
 }
 ?> 
 <style>
    h2{
        text-transform: uppercase;
            color:black;
        }
        input{
            border: 1px solid grey;
            border-collapse: collapse;
            border-spacing: 15;
            width: 50%;
            margin:10px auto 10px auto;
        }
        input label{background-color: gainsboro;
            border: 1px solid grey;
            color: #336b6b;
            padding: 10px;
            text-align: left;
            text-shadow:1px 1px 1px #fff;
            }
        
</style>
 <center><h2>Ubah Bobot</h2></center>
 <center><form action="aksi_bobot.php" method="POST">
   <div class="form-group row">
     <label for="staticEmail" class="col-sm-2 col-form-label">W1</label>
     <div class="col-sm-10">
       
       <input type="text"  class="form-control" name="w1" value="<?php echo $w1=(isset($row['w1'])) ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">W2</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="w2" value="<?php echo $w2=(isset($row['w2'])) ?>">
     </div>
   </div>
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label">W3</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" name="w3" value="<?php echo $w3=(isset($row['w3'])) ?>">
     </div>
   </div>
  
   <div class="form-group row">
     <label for="inputPassword" class="col-sm-2 col-form-label"></label>
     <div class="col-sm-10">
       <input type="submit" class="btn btn-success" value="Ubah">
     </div>
   </div>
  
 </form></center>
</div>
