<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 03</title>
</head>
<body>
<b>Flowchart : <br></b>
<?php
$i=1;
while ($i<=10)
{
	echo "Belajar Perulangan While $i <br>";
	$i++;
}
?>
<br>

<b>Kelipatan Lima : <br></b>
<?php
for ($i= 0; $i <= 100; $i=$i+5) 
{ 
	echo $i;
	echo "<br />";
}
?>
<br>

<b>Hitung Mundur : <br></b>
<?php
for ($i= 20; $i >= 1; $i--) 
{ 
	echo $i;
	echo "<br />";
}
?>

</body>
</html>