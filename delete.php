<?php
include_once 'koneksi.php';
$konten = $_GET['konten'];
$conn->query("DELETE FROM tweet WHERE konten='$konten'");
header("location:home.php");
?>
