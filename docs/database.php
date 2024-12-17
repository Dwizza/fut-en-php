<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "fut_champions_ultimate_team";

$conn = mysqli_connect('localhost', 'root', '','fut_champions_ultimate_team');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>