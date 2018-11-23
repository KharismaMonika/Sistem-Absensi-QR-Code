<!DOCTYPE html>
<html>
<head>
	<title>Aktivasi Kelas</title>
</head>
<body>
	<video id="preview" style="display: none;"></video>
    <button id="fullscreen" onclick="start_camera()">Aktifkan Kelas</button>
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