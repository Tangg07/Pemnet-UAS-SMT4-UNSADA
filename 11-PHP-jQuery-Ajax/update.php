<?php

include "koneksi.php";
$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

$sql = "UPDATE toperasi SET nama='$nama', alamat='$alamat', umur='$umur' WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

?>