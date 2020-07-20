<?php

include "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM toperasi WHERE id='$id'";

$query = mysqli_query($koneksi, $sql);

?>