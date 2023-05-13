<?php
     include("../config.php");
     $sql = "SELECT * FROM saran";
     $query = mysqli_query($conn, $sql);
     $data = mysqli_fetch_array($query);
     $no = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Export ke Excel</title>
</head>
<body>
	<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data saran & kritik.xls");
	?>

	<center><h1>Data Saran & Kritik</h1></center>

	<table border="1" class="">
		<thead>
			<tr>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pengirim</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Saran & Kritik</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($conn, $sql);
				while ($data = mysqli_fetch_array($query)){
			?>
				<tr>
					<td class="kolom-no pl-4"><?php echo $no++; ?></td>
					<td class="kolom-responsive"><?php echo $data['nama_pengirim']; ?></td>
					<td class="kolom-responsive"><?php echo $data['komentar']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>