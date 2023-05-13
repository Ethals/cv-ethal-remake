<?php
     include("../config.php");

     $id = $_GET['id'];
     $sql = "DELETE FROM donasi_transaksi WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
?>

<script type="text/javascript">
     window.location.href="donasi.php";
</script>