<?php 

require_once 'db_connect.php';

if($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];

	$id = $_POST['id'];

	$sql  = "UPDATE members SET fname = '$fname', lname = '$lname', age = '$age', contact = '$contact' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		header("Location:../index.php");
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>