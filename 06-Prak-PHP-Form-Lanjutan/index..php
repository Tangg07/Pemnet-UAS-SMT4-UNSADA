<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $nikErr = $hpErr = "";
$name = $email = $gender = $alamat = $nik = $hp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nama Wajib Diisi";
  } else {
    $name = test_input($_POST["name"]);
    // cek format nama
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Hanya boleh huruf dan spasi"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email Wajib Diisi";
  } else {
    $email = test_input($_POST["email"]);
    // cek format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format Email anda salah"; 
    }
  }

  if (empty($_POST["hp"])) {
    $hpErr = "No.Handphone Wajib Diisi";
  } else {
    $hp = test_input($_POST["hp"]);
    // cek format HP
    if (!is_numeric($hp)) {
      $hpErr = "Harus diisi Dengan Angka"; 
    }
  }


  if (empty($_POST["nik"])) {
    $nikErr = "Nik Wajib diisi";
  } else {
    $nik = test_input($_POST["nik"]);
    if (!is_numeric($nik)) {
      $nikErr = "Harus diisi Dengan Angka"; 
    }
  }

  if (empty($_POST["alamat"])) {
    $alamat = "";
  } else {
    $alamat = test_input($_POST["alamat"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Jenis Kelamin Wajib Diisi";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validasi </h2>
<p><span class="error">* Wajib diisi.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  NIK : <input type="text" name="nik" value="<?php echo $nik;?>">
  <span class="error">* <?php echo $nikErr;?></span>
  <br><br> 
  Nama: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Alamat: <textarea name="alamat" rows="5" cols="40" maxlength="200"><?php echo $alamat;?></textarea>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  No.Handphone: <input type="text" name="hp" value="<?php echo $hp;?>" maxlength="13">
  <span class="error">* <?php echo $hpErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Wanita">Wanita
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Pria">Pria
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Kirim Data"> 
</form>

<?php
echo "<h2>Data Anda Adalah:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $nik;
echo "<br>";
echo $alamat;
echo "<br>";
echo $gender;
?>

</body>
</html>