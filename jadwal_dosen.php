<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Dosen</title>
</head>
<body>
	<?php 
		session_start();
		$id_dosen = $_SESSION['username'];
		echo $id_dosen;
/*		echo $_SESSION['username'];
		echo $_SESSION['type'];*/
		$mysqli = new mysqli("localhost", "root", "", "absensi");
		//$data = $mysqli->query("SELECT jadwal.ID_MK FROM jadwal JOIN mata_kuliah ON jadwal.ID_Dosen=mata_kuliah.ID where jadwal.ID_Dosen='19741022 2000031001'");
		$data = $mysqli->query("SELECT mata_kuliah.Nama_MK FROM mata_kuliah JOIN jadwal ON jadwal.ID = mata_kuliah.ID where jadwal.ID_Dosen='".$id_dosen."'");
		print_r($data);

		if (mysqli_num_rows($data) > 0) {
			echo "sukses";
		}
		else {
			echo "data tidak ada";
		}

	 ?>

	 <h2>Data Mata Kuliah Diampu</h2>
	 <table>
	 	 <tr>
		    <th>Tahun</th>
		    <th>Semester</th> 
		    <th>Mata Kuliah</th>
		  </tr>
	 <?php while($row = mysqli_fetch_array($data)) { ?>
	 		<tr>
	 			<td>2018</td>
	 			<td>Ganjil</td>
	 			<td><?php echo $row['Nama_MK']; ?></td>
	 			<td><button type="submit" name="id_MK">Absen</button></td>
	 		</tr>
	 <?php } ?>
	 </table>

</body>
</html>