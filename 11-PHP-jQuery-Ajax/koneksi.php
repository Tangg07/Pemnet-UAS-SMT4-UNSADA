<?php

$servername = "sql102.epizy.com";
$username = "epiz_26045920";
$password = "wcqKB1v98c1";
$db = "epiz_26045920_pemnet";

$koneksi = @mysqli_connect($servername, $username, $password, $db);

    if(!$koneksi){
        echo "Error: ". mysqli_connect_error();
        exit();
    }

?>