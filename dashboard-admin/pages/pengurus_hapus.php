<?php
     include("../config.php");

     $id = $_GET['id'];
     $sql = "DELETE FROM pengurus WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
?>

<script type="text/javascript">
     window.location.href="pengurus.php";
</script>