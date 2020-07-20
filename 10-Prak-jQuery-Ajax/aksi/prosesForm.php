<?php
if (trim($_POST['nim']) == '') {
    $error[] = '!-- NIM harus diisi';
} elseif (trim($_POST['nama']) == '') {
    $error[] = '!-- NAMA harus diisi';
} elseif (trim($_POST['ttl']) == '') {
    $error[] = '!-- Tempat Tanggal Lahir harus diisi';
} elseif (isset($error)) {
    echo '<b>Error</b>: <br>'.implode('<br>', $error);
} else {
    //Jika ingin Mengirim data KE DB
    //Insert Disini
    $data = '';
        foreach ($_POST as $k => $v) {
            $data .= "$k : $v <br>";
        }
    echo "<b> Form berhasil di submit. Berikut data Anda : </b><br>";
    echo $data;
}