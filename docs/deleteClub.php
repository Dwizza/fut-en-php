<?php
include 'database.php';

$delete = "DELETE FROM club WHERE id_club = ".$_GET['id']."";
mysqli_query($conn, $delete);
header('Location: club.php');
?>