<!DOCTYPE html>
<html>
<head>
	<title>Aktivasi Kelas</title>
</head>
<body>
	<video id="preview" style="display: none;"></video>
    <?php 
    session_start();
    $id_dosen = $_SESSION['username'];
    echo $id_dosen;
    $mysqli = new mysqli("localhost", "root", "", "absensi");
    $data = $mysqli->query("SELECT mata_kuliah.Nama_MK FROM mata_kuliah JOIN jadwal ON jadwal.ID = mata_kuliah.ID where jadwal.ID_Dosen='".$id_dosen."'");
    //print_r($data);

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
        <td><button id="fullscreen" onclick="start_camera()">Aktifkan Kelas</button></td>
      </tr>
   <?php } ?>
   </table>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/absensi/js/instascan.min.js"></script>
    <script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {
      alert(content);
      window.location.href=content;
    });

    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
    function start_camera()
      {
        $('#preview').show();
        var elem = document.getElementById("preview");
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) {
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
          elem.webkitRequestFullscreen();
        }
      }
    	
    </script>

</body>
</html>