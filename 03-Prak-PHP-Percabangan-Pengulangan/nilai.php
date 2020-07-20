 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="form1"action=""method="POST">
    Input : <input type="text" name="input">
	<input type="submit" name="submit">
    <br>
    <?php
    	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        if (isset($_POST['submit'])) {
		$input = $_POST['input'];
		if ($input>=80 && $input<=100) {
			$tampil = "jika mendapatkan angka ".$input." maka nilainya adalah A";	
			echo $tampil;
		}elseif($input>=70 && $input<=79){
			$tampil = "jika mendapatkan angka ".$input." maka nilainya adalah B";
			echo $tampil;
		}elseif($input>=60 && $input<=69){
			$tampil = "jika mendapatkan angka ".$input." maka nilainya adalah C";
			echo $tampil;
		}elseif($input>=50 && $input<=59){
			$tampil = "jika mendapatkan angka ".$input." maka nilainya adalah D";
			echo $tampil;
		}elseif($input>=0 && $input<=49){
			$tampil = "jika mendapatkan angka ".$input." maka nilainya adalah E";
			echo $tampil;
		}else{
			echo "Masukkan Nilai 1-100";
		}
	}
    ?>
</body>
</html>