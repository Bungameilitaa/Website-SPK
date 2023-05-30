<?php include 'koneksi_spk.php';

    if(isset($_GET['id_alternatif'])){
        $id_alternatif=($_GET['id_alternatif']);
        $query="SELECT *FROM alternatif WHERE id_alternatif='$id_alternatif'";
        $result=mysqli_query($koneksi,$query);
        if(!$result){                           
            die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

        }
        $data=mysqli_fetch_assoc($result);
            if(!count($data)){
                echo"<script>alert('data tidak ditemukan pada database');window.location ='index.php';</script>";
            }
        }
           
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>spk</title>
            <style type="text/css">
        *{
            font-family: "Lucida Bright";
        }
        h1{
            text-transform: uppercase;
            color:lightcoral;
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
    <center><h1>EDIT DATA ALTERNATIF </h1></center>
        <form method="POST" action="aksi_edit_alternatif.php" enctype="multipart/form-data" >
        <section class ="base">
           
        <div>
            <label>NAMA OBJEK</label>
            <input type="text"  name="nama_objek"   autofocus="" required="" value="<?php echo $data['nama_objek'];?>"/>
            <input name="id_alternatif" value="<?php echo $data['id_alternatif'];?>" hidden/>
        </div> 
        <div>
            <br>
            <button type="submit">Simpan Data</button>
        </div>
        </section>
        </form>
</body>
</html>