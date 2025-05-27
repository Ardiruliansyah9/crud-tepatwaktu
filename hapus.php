<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM keterlambatan WHERE id=$id");
header("Location: index.php");
?>
