<?php 
     include("../config.php");

     $id = $_GET['id'];
     $sql = "SELECT * FROM donasi_transaksi WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
     $load_driver = mysqli_fetch_assoc($query);

     $nama_donatur = $load_driver['nama_donatur'];
     $no_hp = $load_driver['no_hp'];
     $nominal = $load_driver['nominal'];
     $nominalrandom = $load_driver['nominalrandom'];
     $status = "Belum diterima";
     
     // mysqli_query($conn, "INSERT INTO donasi_transaksi VALUES(NULL,'$nama_donatur','$no_hp','$nominal','$nominalrandom',NULL,'$status')");
     mysqli_query($conn, "UPDATE donasi_transaksi SET nama_donatur = '$nama_donatur', no_hp = '$no_hp', nominal = '$nominal', nominalrandom = '$nominalrandom', status = '$status' WHERE id = '$id'");

     header("location: donasi.php?nama_donatur=$nama_donatur#popup");
     
     
?>
