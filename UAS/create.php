<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Add Data</legend>

	<form action="php_action/create.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>NIK</th>
				<td><input type="number" name="nik" placeholder="NIK" /></td>
			</tr>		
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" placeholder="Nama" /></td>
			</tr>
			<tr>
				<th>kota</th>
				<td><input type="text" name="kota" placeholder="Kota" /></td>
			</tr>
			<tr>
				<th>No.Telepon</th>
				<td><input type="text" name="no_hp" placeholder="No.Telepon" /></td>
			</tr>
			<tr>
				<td><button type="submit">Save</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>