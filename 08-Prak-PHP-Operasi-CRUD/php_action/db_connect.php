<?php 

$localhost = "sql102.epizy.com";
$username = "epiz_26045920";
$password = "wcqKB1v98c1";
$dbname = "epiz_26045920_pemnet	";

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}

?>
