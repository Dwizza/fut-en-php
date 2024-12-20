<?php
include 'database.php';


$delete = "DELETE FROM GK WHERE id = ".$_GET['id']."";
mysqli_query($conn, $delete);
header('Location: index2.php');
?>