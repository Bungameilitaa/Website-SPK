<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
 header("location:login.php");
}
?>
  

<!DOCTYPE html>
<html>
<head>
 <title>Sistem Pendukung Keputusan</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <style type="text/css">
   *{margin:0;padding:0}
   .container{
     border-bottom:100px solid #333;
     border-top: 20px solid #eee;
     display: -webkit-box;
     display: -ms-flexbox;
     height:0;
   }
   h1{
     border : 10px solid #fff;
     color:#fff;
     font-size:70px;
     margin:auto;
     mix-blend-mode: difference;
     padding: 0 50px;
     text-transform: uppercase;
     -webkit-trnasform: translate(0, -50%);
              transform: translate(0 -50%);
     -webkit-transition: box-shadow 0.4s;
     transition: box-shadow 0.4s;
   }
   h1:hover{
     box-shadow:0 0 0 30px #555;
   }
   a{text decoration : none; font-size: 20px; font-family: sans-serif; padding: 14px 10px}
   ul{padding : 14px}
   li{list-style:none; display :inline;}
   li a{background: grey: color:grey;}
   li a:hover{background:#4da4ff; color:#fff;}
   .navi{background: grey; height:50px}
  </style>
</head>
  <body>
  <div class="container">
    <h1>SPK WISATA GRESIK</h1>
</div><br>
    <nav class = "navi">
      <ul>
        <li><a href= "index.php?halaman=home"> HOME</a></li>
        <li><a href= "index.php?halaman=data"> DATA ALTERNATIF</a></li>
        <li><a href= "index.php?halaman=penilaian"> PENILAIAN</a></li>
        <li><a href= "index.php?halaman=rangking"> RANGKING</a></li>
        <li><a href= "index.php?halaman=bobot"> BOBOT</a></li>
        <li><a href= "logout.php"> LOGOUT</a></li><br>

   <br>
  
   <?php
  include "konten.php";
  ?>
  
</html>