<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 11 - Pemrograman Internet</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("tbody tr:odd").addClass("ganjil");
            $("tbody tr:even").addClass("genap");
        });
    </script>

    <style type="text/css">
        tr th{
            background-color: #FF9900;
        }
        .ganjil{
            background-color: #ccc;
        }
        .genap{
            background-color: #eee;
        }
    </style>
</head>
<body>
<table border="1">
    <tr>
        <th> No </th>
        <th> Nama </th>
        <th> Alamat </th>
        <th> Umur </th>
        <th> Aksi </th>
    </tr>

    <?php
        include "koneksi.php";

        $sql = "SELECT * FROM toperasi";

        $query = mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($query)>0);

        $no = 1;
        while($data = mysqli_fetch_array($query)){
            echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td><td>$data[umur]</td>
            <td><a class='updateData' href='update.php?id='$data[id]' nama='$data[nama]' alamat='$data[alamat]' umur='$data[umur]'>Ubah</a> | <a class='hapusData' href=delete.php?id=$data[id]>Hapus</a></td></tr>";
        };
    ?>
</table>
</body>
</html>