<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil Cari Rata-rata Bilangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Cari Rata-rata Bilangan</h1>
    <?php
        $n = $_POST['n'];
        for ($i=0; $i <= $n - 1; $i++){
            $bilangan[$i] = $_POST['data'.$i];
        } $jumlah = 0;
        for ($i=0; $i <= $n - 1; $i++){
            $jumlah += $bilangan[$i];
        } $rataRata = $jumlah/$n;
        for ($i=0; $i <= $n - 1; $i++){
            echo "Bilangan ke-".($i+1)." =".$bilangan[$i]."<br>";
        }
        echo "<br>Rata-ratanya adalah : ".$rataRata;
    ?>
</body>
</html>