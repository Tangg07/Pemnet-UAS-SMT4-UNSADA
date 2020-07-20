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
	<a href="create.php"><button type="button">Add Member</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Umur</th>
				<th>No.Telepon</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM members WHERE active = 1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['fname']." ".$row['lname']."</td>
						<td>".$row['age']."</td>
						<td>".$row['contact']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button'>Hapus</button></a>
						</td>
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