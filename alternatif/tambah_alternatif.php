<div class="col-10">
<?php include "koneksi_spk.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>spk</title>
  <style>
    *{font-family:"Lucida Bright";}
    h1{
            text-transform: uppercase;
            color:black;
        }
        button{
            background-color:burlywood;
            color:black;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
            border: 0px;
            margin-top: 20px;
        }
        label{
            margin-top: 10px;
            float:left;
            text-align:left;
            width: 100%
        }
        input{
            padding: 6px;
            width:100%;
            box-sizing: border-box;
            background:#f8f8f8;
            border : 2px solid grey;
            outline-color: black;
        }
        div{
            width: 100%;
            height: auto;
        }
        .base{
            width: 400px;
            height: auto;
            padding: 20px;
            margin-left: auto;
            margin-right:auto;
            background: #ededed;
        }
  </style>
</head>
<body>

<center><h1>Tambah Data</h1></center>
    <form action="aksi_tambah_alternatif.php" method="POST" >
    <section class ="base">
    <div>
            <label>Nama Objek Wisata</label>
            <input type="text"  name="nama_objek" required=""/>
    </div> 
    <div>
            <button type="submit">Simpan Data</button>
    </div>
    </section>
</form>
</body>
</html>