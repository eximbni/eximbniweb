<?php
$message='';
if(isset($_POST['submit']))
{
include("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql="select * from webinar_users where username='$email' and password='$password'";
$result = mysqli_query($conn,$sql);
$row_count = mysqli_num_rows($result);
if($row_count==1)
{
	echo "Login Success";
	$row_user = mysqli_fetch_array($result);
	$user_id = $row_user['id'];
	session_start();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['email'] = $email;
	header("location: index.php");
}
else
{
	$message="Failed To Login";
	//echo mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MIVISION | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
<!--  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
<!--  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>MIVISION</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" id="cbody">
  <div class="container">

    <p class="login-box-msg" id="signtext">Sign in to start your session</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email" required  class="form-control">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password"  required maxlength="15" minlength="4" class="form-control">
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="checkbox icheck">
            <label>
              <?php echo $message; ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3" id="sign">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="Sign In">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
   </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>

</body>
</html>
