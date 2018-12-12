<!DOCTYPE html>
<html>
<head>
	<title>QR Code Kelas</title>
	<link rel="shortcut icon" type="img" href="img/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<?php
# Get Data
$mysqli = new mysqli("localhost", "root", "", "absensi");
$data_kelas = $mysqli->query("SELECT ID, Nama_Kelas FROM kelas where ID=1");
if (mysqli_num_rows($data_kelas) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($data_kelas)) {
	$id_kelas = $row["ID"];
	$Nama_Kelas = $row["Nama_Kelas"];
	}
} 
else {
    echo "0 results";
}

?>
	<p align="center">
		<div class="jumbotron" align="center">
			<img align="center" src="img/favicon.png">
			<table align="center" class="table table-bordered table-hover">
				<thead>
					<tr>
						<h1>RUANG <?php echo $Nama_Kelas?></h1>			
					</tr>
				</thead>
				<tbody>
					<tr>
						<tr>
							<div id="clock"></div>
	 						<script src="js/time.js"></script>
	 					</tr>
						<h5>QRCODE KELAS <?php echo $Nama_Kelas?></h5>
	 					<img id="qr" src="/Sistem-Absensi-QR-Code/QR_Kelas.php?ID=1"><br>			
					</tr>
				</tbody>
			</table>
	 		<!-- <button class="btn btn-primary btn-sm">ACTIVE</button><button class="btn btn-danger btn-sm" onClick="window.location.reload()">RESET</button> -->
	 	</div>
	</p>
	<p>
		
		<div class="container">
	 		<div class="table-responsive">
	 			<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>WAKTU</th>
							<th>JADWAL</th>				
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>07:30 - 10:00</td>
							<td>KECERDASAN KOMPUTASIONAL A</td>
						</tr>
						<tr>
							<td>10:00 - 12:30</td>
							<td>KECERDASAN KOMPUTASIONAL B</td>
						</tr>
						<tr>
							<td>12:30 - 15:00</td>
							<td>-</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	 </p>
	<script>
		setInterval(function(){
		  d = new Date();
		  document.getElementById('qr').src='/Sistem-Absensi-QR-Code/QR_Kelas.php?ID=1&'+d.getTime();
		}, 10000);
	</script>
</body>
</html>