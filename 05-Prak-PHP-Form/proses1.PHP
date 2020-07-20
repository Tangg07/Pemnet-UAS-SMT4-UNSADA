<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proses Cari Rata-rata Bilangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Cari Rata-rata Bilangan</h1>
    <?php
        $n = $_POST['n'];
        echo "<form method='post' action='proses2.php'>";
        for ($i = 0; $i <= $n-1; $i++){
            echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
        }
            echo "<input type='submit' name='submit' value='Submit' />";
            echo "<input type='hidden' name='n' value='".$n."' />";
            echo "</form>";
    ?>
</body>
</html>