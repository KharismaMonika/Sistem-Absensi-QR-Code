<?php
function genToken($salt) {
    $secret = openssl_random_pseudo_bytes(16);

    $apiKey = hash_hmac('sha256', $salt, $secret);
    $apiKey = base64_encode($apiKey);
    $apiKey = str_replace('=', '', $apiKey);

    return $apiKey;
}
$t=time();
$token_baru = genToken($t);
# Include Library PHP QR Code
include('phpqrcode/qrlib.php');  
# Get ID Kelas
$kelas_id = $_GET['ID'];
$mysqli = new mysqli("localhost", "root", "", "absensi");
$data = $mysqli->query("SELECT ID,token FROM kelas where ID='".$kelas_id."'");
$id_kelas;
$token;
if (mysqli_num_rows($data) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($data)) {
	$id_kelas = $row["ID"];
	$token = $row["token"];
	}
}
$sql = "UPDATE kelas SET token='".$token_baru."' WHERE ID=".$kelas_id;
$mysqli->query($sql);
$sql = "UPDATE kuliah SET token='".$token_baru."' WHERE token='".$token."'";
//echo $sql;
$mysqli->query($sql);
QRcode::png("/absensi/insert_kuliah.php?kelas_id=".$kelas_id."&token=".$token_baru);

?>