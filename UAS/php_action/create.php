<?php 

require_once 'db_connect.php';

if($_POST) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$kota = $_POST['kota'];
	$no_hp = $_POST['no_hp'];

	$sql = "INSERT INTO tbphonebook (nik, nama, kota, no_hp) VALUES ('$nik', '$nama', '$kota', '$no_hp')";
	if($connect->query($sql) === TRUE) {
		header("Location:../index.php");
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>