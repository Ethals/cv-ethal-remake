<?php
     include("../config.php");

     $id = $_GET['id'];
     $sql = "DELETE FROM saran WHERE komentar_id = '$id'";
     $query = mysqli_query($conn, $sql);
?>

<script type="text/javascript">
     window.location.href="saran.php";
</script>