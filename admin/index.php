<?php include('koneksi.php');?>
<!DOCTYPE html>
<html>
<head><title>Data event</title></head>
<center><h2>Data Peserta Event</h2></center>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<center><nav><a href="v_form.php"><button>Tambah Baru</button>
	</a></nav></center>
	<br>
	<table border="1" cellpadding="8" align="center" bgcolor="white">
		<thread>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Tanggal lahir</th>
				<th>Alamat</th>
				<th>Tindakan</th>
			</tr>
		</thread>
		<body>
			<?php
			$sql = "SELECT * FROM admin";
			$query = mysqli_query($koneksi, $sql);
			while ($admin = mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td>".$admin['Id']."</td>";
				echo "<td>".$admin['Nama']."</td>";
				echo "<td>".$admin['Email']."</td>";
				echo "<td>".$admin['Tanggal_lahir']."</td>";
				echo "<td>".$admin['Alamat']."</td>";
				echo "<td>";
				echo "<a href = 'edit.php?Id=".$admin['Id']."'>Edit</a>|";
				echo "<a href = 'hapus.php?Id=".$admin['Id']."'>Hapus</a>|";
			}
			?>
		</body>
	</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
<br>
<center><nav><a href="logout.php"><button>Logout</button></nav></center>
</p>
</body>
</html>