<?php
session_start();
if(isset($_POST['login']))
{
$conn=mysqli_connect('localhost','root','','fashion');
$id = $_POST['email'];
$pass = $_POST['password'];
$sql="select id from users where (mail= '$id' OR phone= '$id') AND password= '$pass'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
if($count>0)
{
  $row=mysqli_fetch_array($res);
  $_SESSION['id']=$row['id'];
  //echo "<script type='text/javascript'> alert('SUCCESS'); </script>";
 header('location: /fashist/profile.php');
}
else {
  echo "<script type='text/javascript'> alert('Invalid Credentials'); </script>";
}
mysqli_close($conn);
}
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Fashist</title>
  <link rel="icon" href="./assets/images/logo.png" type="image" sizes="16x16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Roboto:500" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Aladin|Bad+Script|Handlee|Kaushan+Script|Rancho" rel="stylesheet">

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="post" action="">
              <div class="form-label-group">
                <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address/Phone</label>
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button name="login" type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
