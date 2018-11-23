<html>
<body>
	<?php
	//set_include_path('/phpqrcode/qrlib.php');
	include 'phpqrcode/qrlib.php';
	 
	$tempdir = "images/"; //<-- Nama Folder file QR Code kita nantinya akan disimpan
	if (!file_exists($tempdir))#kalau folder belum ada, maka buat.
	    mkdir($tempdir);

	#parameter inputan
	$isi_teks = date("h:i:sa");
	$namafile = "coba1.png";
	$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
	$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
	$padding = 0;

	//,$tempdir.$namafile

	?>

	<div>
		<?php
				//QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);
				QRCode::png("Kharisma savbdhjsnbfjkdngkfmbkmfbnmvbknhxzvfxgvhbjkvb");
		?>

	</div>
	<img src="<?php echo $tempdir.$namafile ?>">

</body>
</html>

<!-- ini sudah bisa, tpi dia selalu simpan hasil qr code di folder, ternyata kalo direfresh ngereplace -->