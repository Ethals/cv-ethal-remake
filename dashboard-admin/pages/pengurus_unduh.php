<?php
     include("../config.php");
     $sql = "SELECT * FROM pengurus";
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
		header("Content-Disposition: attachment; filename=Data pengurus.xls");
	?>

	<center><h1>Data pengurus</h1></center>

	<table border="1" class="">
		<thead>
			<tr>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama pengurus</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Telepon</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($conn, $sql);
				while ($data = mysqli_fetch_array($query)){
			?>
				<tr>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $no++; ?></td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0">
						<div style="width: 60px;height: 80px; border-radius: 0.5rem; background-position: center; background-image: url(../assets/img/pengurus_ppk_ormawa/<?php echo $data['foto'] ?>); background-size: cover;}"></div>
					</td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['nama_pengurus']; ?></td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['no_hp']; ?></td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['jabatan']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>