<?php
include 'database.php';

$delete = "DELETE FROM nationality WHERE id_nationality = ".$_GET['id']."";
mysqli_query($conn, $delete);
header('Location: nationality.php');
?>