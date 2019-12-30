
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title></title>
  <!-- Favicon -->
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<?php session_start(); ?>

<?php

require("./config.php");
//Getting Input value
if (isset($_POST['submit'])){
  //$user_role_id = mysqli_real_escape_string($db, $_POST['user_role_id']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = md5(mysqli_real_escape_string($db, $_POST['password']));
  //$role = mysqli_real_escape_string($db, $_POST['role']);
  if(empty($email)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($db, "SELECT * FROM register WHERE email='$email' and password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){ 
   $_SESSION['user']=array(
   'email'=>$row['email'],
   'password'=>$row['password'],
   'user_id'=>$row['user_id']
   );
  // $strUrl = './viari.php';
   
   
  //$role=$_SESSION['user']['role'];
   //Redirecting User Based on Role
   
    header("Location: viari.php"); 
 }else{
 $error='Your PassWord or UserName is not Found';
 }
}
}
?>

<?php

    // require("./config.php");

// if (isset($_POST['submit']))
        // {     

    //$username = mysqli_real_escape_string($db, $_POST['username']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
   // $password = md5(mysqli_real_escape_string($db, $_POST['password']));

    // $query = mysqli_query($db, "SELECT * FROM register WHERE email='$email' and password='$password'");
     // if (mysqli_num_rows($query) != 0)
    // {
     // header("location:admin/viari.php"); 
      // }
      // else
      // {
    // echo "Invalid Username/Password!";
    // }
    // }
?>

<body class="bg-default">
  <div class="main-content">
   <?php if(isset($error)){ echo $error; }?>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" required="true">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" required="true">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
				<div class="text-center">
                  <a href="viari.php">Continue browsing as a guest</a>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="register.php" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>