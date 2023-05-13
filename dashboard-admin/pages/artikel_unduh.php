<?php
     include("../config.php");
     $sql = "SELECT * FROM artikel";
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
		header("Content-Disposition: attachment; filename=Data Berita & Informasi.xls");
	?>

	<center><h1>Data Artikel</h1></center>

	<table border="1" class="">
		<thead>
			<tr>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">deskripsi</th>
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
						<div style="width: 60px;height: 80px; border-radius: 0.5rem; background-position: center; background-image: url(../assets/img/kegiatan_ppk_ormawa/<?php echo $data['foto'] ?>); background-size: cover;}"></div>
					</td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['nama_berita']; ?></td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['tanggal']; ?></td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['lokasi']; ?></td>
					<td class="align-middle text-center text-xs font-weight-bold mb-0"><?php echo $data['deskripsi']; ?></td>                       
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>