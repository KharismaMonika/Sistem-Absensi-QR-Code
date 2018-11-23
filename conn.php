<!DOCTYPE html>
<html>
<head>
	<title>absensi</title>
</head>
<body>
<h1>ABSENSI</h1>
<?php

$link = mysqli_connect('127.0.0.1:3306', 'root', '', 'absensi');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
/*mysqli_close($link);*/

echo 'Versi PHP yang sedang digunakan: ' . phpversion();
?>
</body>
</html>