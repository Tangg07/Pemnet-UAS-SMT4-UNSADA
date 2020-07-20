<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}

	</style>

</head>
<body>

<div class="manageMember">
	<a href="create.php"><button type="button">Add Data</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>NIK</th>
				<th>Nama</th>
				<th>Kota</th>
				<th>No.Telepon</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM tbphonebook";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['nik']."</td>
						<td>".$row['nama']."</td>
						<td>".$row['kota']."</td>
						<td>".$row['no_hp']."</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Tidak Ada Data</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>