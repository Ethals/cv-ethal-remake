<?php
include("../config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $komentar = mysqli_real_escape_string($conn, $_POST['komentar']);
    $id_parent = mysqli_real_escape_string($conn, $_POST['id_parent']);
    $foto = "fotoadmin.png";

    // Validasi data
    if (empty($nama) || empty($komentar)) {
        echo "Nama, email, dan komentar harus diisi";
    } else {
        // Simpan data ke database
        $query = "INSERT INTO komentar (nama, komentar, foto, id_parent) VALUES ('$nama', '$komentar', '$foto', ";
        $query .= $id_parent == '' ? "NULL)" : "$id_parent)";
        mysqli_query($conn, $query);
        echo "Komentar berhasil dikirim";
    }

    
}
?>

    <script type="text/javascript">
        window.location.href="komentar.php#komentar";
    </script>




        