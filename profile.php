<?php
session_start();
if(!isset($_SESSION['id']))
{
  header('Location : fashist/index.php');
}
if(isset($_POST['pro']))
{
$conn=mysqli_connect('localhost','root','','fashion');
$bust= $_POST['bust']/2.54;
$waist=$_POST['waist']/2.54;
$hip =$_POST['hip']/2.54;
$height = $_POST['height'];
$id= $_SESSION['id'];
if((($bust-$hip)<=1 && ($hip-$bust)<3.6 && ($bust-$waist)>=9) || ($hip-$waist)>=10)
{
  $body_shape="Hourglass";
}
else if(($hip-$bust)>=3.6 && ($hip- $waist)<9)
{
  $body_shape="Pear";
}
else if(($hip/$bust)>=1.05)
{
  $body_shape="Apple";
}
else if(($hip-$bust)<3.6 && ($bust-$hip)<3.6 && ($bust-$waist)<9 && ($hip - $waist)<10)
{
  $body_shape="Rectangle";
}
$sql = "UPDATE users SET waist='$waist',body_shape='$body_shape',skin='fair',height='$height' WHERE id= '$id' ";
//   echo $sql;
mysqli_query($conn,$sql);
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
</head>
<body>
<div class="container">
    <div class="card card-signin my-5">
          <div class="card-body">
              <div class="container1">
                   <h2 class="card-title text-center">Tell us More!</h2>
                  <br>
                  <p class="measure">Measurements</p>
     <form class="form-signin" method="post" action="">
             <div class="form-label-group">
           <input name="bust" type="text" class="form-control" placeholder="Bust size" value="" required/>
              </div>

              <div class="form-label-group">
                 <input name="hip" type="text" class="form-control" placeholder="Hip size" value="" required/>
              </div>
                 <div class="form-label-group">
                  <input name="waist" type="text" class="form-control" placeholder="Waist size" value="" required/>

              </div>
                  <div class="form-label-group">
                 <input name="height" type="text" class="form-control" placeholder="Height in cm" value="" required/>
              </div>
         <div class="form-label-group">
       <center>  <ul id="menulist">
        <li><img src="./assets/images/fair.png"></li>
             <li><img src="./assets/images/olive.png"></li>
                 <li><img src="./assets/images/light%20brown.png"></li>
                 <li><img src="./assets/images/brown.png"></li>
                 <li><img src="./assets/images/dark%20brown.png"></li>
                 <li><img src="./assets/images/black%20brown.png"></li>
        </ul></center>
         </div>
            <center> <button name="pro" type="submit" style="background-color:#f229cd;color:#ffffff;" class="btn  btn-default  text-uppercase" type="submit">Submit Profile</button></center>
            </form></div>
        </div></div></div>
      </body>
      </html>
