<?php
include_once 'koneksi.php';

    if(isset($_POST["submit"])){
    $tgl      = date("Y-m-d H:i:s");
	  $konten   = $_POST['konten'];

    $simpan   = $conn->query("INSERT INTO tweet VALUES ('','$tgl','$konten')");
    if($simpan) {
      header("location: home.php");
    } else {
      echo "<script>alert('Ups.. Tweet anda gagal dimuat!');window.location='home.php';</script>";
    }
}
?>
