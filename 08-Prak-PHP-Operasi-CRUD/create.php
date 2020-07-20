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
	<legend>Add Member</legend>

	<form action="php_action/create.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nama Depan</th>
				<td><input type="text" name="fname" placeholder="Nama Depan" /></td>
			</tr>		
			<tr>
				<th>Nama Belakang</th>
				<td><input type="text" name="lname" placeholder="Nama Belakang" /></td>
			</tr>
			<tr>
				<th>Umur</th>
				<td><input type="text" name="age" placeholder="Umur" /></td>
			</tr>
			<tr>
				<th>No.Telepon</th>
				<td><input type="text" name="contact" placeholder="No.Telepon" /></td>
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