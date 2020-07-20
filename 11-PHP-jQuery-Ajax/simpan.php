<?php

include "koneksi.php";
if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO toperasi(nama, alamat, umur) VALUES('$nama','$alamat','$umur')";

    $query = mysqli_query($koneksi, $sql);
    if($query){
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan". mysqli_error($koneksi);
    }
}

?>