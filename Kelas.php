<!DOCTYPE html>
<html>
<head>
	<title>QR Code Kelas</title>
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
	<h2><?php echo $Nama_Kelas?></h2>
	<img id="qr" src="/absensi/QR_Kelas.php?ID=1">
	<script>
		setInterval(function(){
		  d = new Date();
		  document.getElementById('qr').src='/absensi/QR_Kelas.php?ID=1&'+d.getTime();
		}, 10000);
	</script>
</body>
</html>