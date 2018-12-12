<?php
	function genToken($salt) {
	    $secret = openssl_random_pseudo_bytes(16);

	    $apiKey = hash_hmac('sha256', $salt, $secret);
	    $apiKey = base64_encode($apiKey);
	    $apiKey = str_replace('=', '', $apiKey);

	    return $apiKey;
	}

	$kelas_id = $_GET['kelas_id'];
	$token = $_GET['token'];
	$ID_Jadwal = $_GET['ID_jadwal'];
	session_start();
	// echo $_SESSION['username'];
	// echo $_SESSION['type'];

	if ($_SESSION['type']== "dosen") {
		# code...
		$mysqli = new mysqli("localhost", "root", "", "absensi");
		$t=time();
		$token = genToken($t);
		$sql = "INSERT INTO kuliah (ID_Jadwal, ID_Kelas, token) VALUES ('".$ID_Jadwal."', '".$kelas_id."', '".$token."')";

		if ($mysqli->query($sql) === TRUE) {
		    echo "New record created successfully";
		    $sql = "UPDATE kelas SET token='".$token."' WHERE ID=".$kelas_id;
		    $mysqli->query($sql);
		    header('Location:/Sistem-Absensi-QR-Code/aktifasi_kelas.php');
		} else {
		    echo "Error: " . $sql . "<br>" . $mysqli->error;
		    header('Location:/Sistem-Absensi-QR-Code/aktifasi_kelas.php');
		}
	}

	else if($_SESSION['type']== "mahasiswa"){
		$mysqli = new mysqli("localhost", "root", "", "absensi");
		$data = $mysqli->query("SELECT ID_Kuliah FROM kuliah where token='".$token."'");

		if (mysqli_num_rows($data) > 0) {
		// output data of each row
			while($row = mysqli_fetch_assoc($data)) {
				$id_kuliah = $row["ID_Kuliah"];
				//echo $id_kuliah;
				$sql = "INSERT INTO absensi (ID_Kuliah, NRP) VALUES ('".$id_kuliah."', '".$_SESSION['username']."')";

				if ($mysqli->query($sql) === TRUE) {
				    echo "<script> alert('SUKSES') </script>";
				    header('Location:/Sistem-Absensi-QR-Code/log_absensi.php');
				} 
				else {
					//echo $id_kuliah;
				    //echo "Error: " . $sql . "<br>" . $mysqli->error;
				    header('Location:/Sistem-Absensi-QR-Code/log_absensi.php');
				}
			}	
		}
		else{
			header('Location:/Sistem-Absensi-QR-Code/absensi.php');
		}
		//$sql = "INSERT INTO kuliah (ID_Jadwal, ID_Kelas, token) VALUES ('1', '1', '".$token."')";
	}
 ?>