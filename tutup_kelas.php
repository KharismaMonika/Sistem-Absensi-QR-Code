<?php 
	$kelas_id = $_GET['ID_kelas'];
	$mysqli = new mysqli("localhost", "root", "", "absensi");
	$sql = "UPDATE kelas SET token=NULL WHERE ID=".$kelas_id;
	$mysqli->query($sql);
	if ($mysqli->query($sql) === TRUE) {
	    header('Location:/Sistem-Absensi-QR-Code/aktifasi_kelas.php');
	} else {
	    header('Location:/Sistem-Absensi-QR-Code/aktifasi_kelas.php');	}
 ?>