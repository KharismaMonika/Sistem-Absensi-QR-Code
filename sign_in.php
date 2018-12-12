
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/Sistem-Absensi-QR-Code/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/Sistem-Absensi-QR-Code/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/Sistem-Absensi-QR-Code/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/Sistem-Absensi-QR-Code/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>SI</b>Absensi</a>
            <small>Sistem Absensi Pascasarjana Informatika ITS</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="" method="post">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <!-- <a href="#">Register Now!</a> -->
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
    if (isset($_POST['username'])) {
    	# code...
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$mysqli = new mysqli("localhost", "root", "", "absensi");
    	$data = $mysqli->query("SELECT ID, nama, role FROM user where ID='".$username."' AND password='".$password."'");
    	
    	if (mysqli_num_rows($data) > 0) {
    		while($row = mysqli_fetch_assoc($data)){
    			if ($row["role"] == "dosen") {
    				# code...
    				session_start();
    				$_SESSION['username'] = $username;
    				$_SESSION['type'] = "dosen";
    				header('Location:/Sistem-Absensi-QR-Code/index_dosen.php');
    			}
    			elseif ($row["role"] == "mahasiswa") {
    				# code...
    				session_start();
    				$_SESSION['username'] = $username;
    				$_SESSION['type'] = "mahasiswa";
                    header('Location:/Sistem-Absensi-QR-Code/absensi.php');
    			}
    		}
    	}
    	else {
    		echo "result 0";
    	}
    }
    	
    ?>

    <!-- Jquery Core Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="/Sistem-Absensi-QR-Code/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="/Sistem-Absensi-QR-Code/js/admin.js"></script>
    <script src="/Sistem-Absensi-QR-Code/js/pages/examples/sign-in.js"></script>
</body>

</html>