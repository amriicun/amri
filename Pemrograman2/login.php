
<?php 
// KONEKSI KE DATA BASE DENGNA MENGGUNAKAN PDO
require_once("includes/myclass.php");

if(isset($_POST['login'])){
  
   
    // ambil data dari form login
   
    $username = $_POST['username']; 
      $username = $_POST['username']; 	

    // ambil data dari database
	$user = new Login();
 
	$data=$user->CheckLogin($username);
 
 

    // bandingkan password yang dikirim dari form login dengan password
    // yang ada di database
	
	 if( password_verify($_POST['password'], $data['password']) ) {
        session_start();
           $_SESSION["user"] = $data['password'];
           // login sukses, alihkan ke halaman timeline
           header("Location: index.php");  
    } else {
        // login gagal
    }
	


   
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
<body class="bg-light">
 
    <?php include "includes/header.php" ?>
    <div class="container">
 
                <h4>Masuk ke Website ini</h4>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

                </form>
                    
         
    </div>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>  
</body>
</html>

