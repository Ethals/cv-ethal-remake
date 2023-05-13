<?php
     include("../config.php");

     $id = $_GET['id'];
     $sql = "DELETE FROM galeri_lainnya WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
?>

<script type="text/javascript">
     window.location.href="galeri.php";
</script>