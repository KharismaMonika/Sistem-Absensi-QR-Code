<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username" placeholder="NID"><br>
		<input type="text" name="password" placeholder="password"><br>
		<button type="submit" name="login">LOGIN</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];
	$mysqli = new mysqli("localhost", "root", "", "absensi");
	$data = $mysqli->query("SELECT NID, nama FROM dosen where NID='".$username."' AND password='".$password."'");
	
	if (mysqli_num_rows($data) > 0) {
		//echo "sukses";
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "dosen";
	}
	else {
		echo "result 0";
	}
}
	
?>