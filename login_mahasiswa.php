<!DOCTYPE html>
<html>
<head>
	<title>Login Mahasiswa</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username" placeholder="NRP"><br>
		<input type="text" name="password" placeholder="password"><br>
		<button type="submit" name="login">LOGIN MAHASISWA</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];
	$mysqli = new mysqli("localhost", "root", "", "absensi");
	$data = $mysqli->query("SELECT NRP, nama FROM mahasiswa where NRP='".$username."' AND password='".$password."'");
	
	if (mysqli_num_rows($data) > 0) {
		//echo "sukses";
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "mahasiswa";
	}
	else {
		echo "result 0";
	}
}
	
?>