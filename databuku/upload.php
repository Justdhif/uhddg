<?php 

include("connect.php");
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
$pengarang = $_POST['pengarang'];
$deskripsi = $_POST['deskripsi'];

move_uploaded_file($file_tmp,'file/' .$foto);

$query = "INSERT INTO `buku` SET nama = '$nama', pengarang = '$pengarang', deskripsi = '$deskripsi', foto = '$foto'";

mysqli_query($koneksi, $query) or die("SQL ERROR" .mysqli_error());
header("location:data.php");