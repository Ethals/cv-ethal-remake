<?php
     include("../config.php");

     $id = $_GET['id'];
     $sql = "DELETE FROM mailling_list WHERE id = '$id'";
     $query = mysqli_query($conn, $sql);
?>

<script type="text/javascript">
     window.location.href="mailling_list.php";
</script>