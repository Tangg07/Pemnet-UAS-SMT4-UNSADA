<?php 

require_once 'db_connect.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE members SET active = 2 WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		header("Location:../index.php");
	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>