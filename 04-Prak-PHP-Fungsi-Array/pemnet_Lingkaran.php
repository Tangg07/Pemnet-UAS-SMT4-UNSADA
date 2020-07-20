<html>
<head>
    <title>Menghitung Luas & Keliling Lingkaran</title>
</head>
<body>
    <h1>Form Hitung Luas & Keliling Lingkaran Dengan PHP</h1>
    <form action=" " method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jari-jari Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="jari" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            $keliling_lingkaran = (2*$phie)*$jari;
            
            echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br />";
            echo "Diketahui : <br />";
            echo "R = $jari<br/>";
            echo "Phie = $phie<br />";
            echo "Maka keliling lingkaran =  <b> $keliling_lingkaran <br/></b>";
            echo "Maka luas lingkaran =  <b> $luas_lingkaran </b>";
        }
    ?>
</body>
</html>