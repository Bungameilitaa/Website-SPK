<?php include 'koneksi_spk.php';
$id_alternatif = $_GET['id_alternatif'];

$sql = "DELETE FROM alternatif WHERE id_alternatif = '$id_alternatif'";
$hasil = mysqli_query($koneksi, $sql);

if(!$hasil){
    die("hapus data gagal: ".mysqli_errno($koneksi). "-".mysqli_error($koneksi));
}else {
    echo "<script>alert('data dihapus .');window.location = 'index.php';</script>";
}
?>