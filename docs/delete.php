<?php
include 'database.php';

$delete = "DELETE FROM player WHERE id = ".$_GET['id']."";
mysqli_query($conn, $delete);
header('Location: index2.php');
?>