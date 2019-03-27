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
if(isset($_POST['reg']))
{
$conn=mysqli_connect('localhost','root','','fashion');
$name= $_POST['name'];
$email=$_POST['mail'];
$phone =$_POST['phone'];
$pass = $_POST['password'];
$id= uniqid('USR');
$sql = "INSERT into users (id,name,mail,password,phone) VALUES('$id','$name','$email','$pass',$phone)";
//   echo $sql;
mysqli_query($conn,$sql);
$_SESSION['id']=$id;
header('location: /fashist/index.php');
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
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Aladin|Bad+Script|Handlee|Kaushan+Script|Rancho" rel="stylesheet">

 </head>
 <body>
   <div class="container">
     <div class="row">
         <div class="col-sm-12 col-md-5 col-lg-6 mx-auto">
         <h1 class="four">Fashist</h1>
             <h4 class="fourmini hidden-xs hidden-sm">Suggesting the Better for you!</h4>
         </div>
       <div class="col-sm-12 col-md-7 col-lg-6 mx-auto">
         <div class="card card-signin my-5">
           <div class="card-body">

                <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
             <h5 class="card-title text-center">Get In Now!</h5>
             <form class="form-signin" method="post" action="">
               <div class="form-label-group">
                 <input name="email" type="text" class="form-control" placeholder="Email address" required autofocus>
               </div>

               <div class="form-label-group">
                 <input name="password" type="password" class="form-control" placeholder="Password" required>
               </div>

               <div class="custom-control custom-checkbox mb-3">
                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                 <label class="custom-control-label" for="customCheck1"> Remember password</label>
               </div>
               <button name="login" type="submit" style="background-color:#f229cd;color:#ffffff;" class="btn btn-lg btn-default btn-block text-uppercase" type="submit">Start Exploring</button>
                 <br>
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
             <li class="nav-item">
               <center>  <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><label >Not Registered yet?</label></a></center>
             </li>
           </ul>

             </form>
           </div>
                <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                     <h5 class="card-title text-center">Help us Know you Better....</h5>
             <form class="form-signin" method="post" action="">
              <div class="form-label-group">
                 <input name="name" type="text" class="form-control" placeholder="Enter Name.." required>
               </div>

               <div class="form-label-group">
                  <input name="phone" type="text" class="form-control" placeholder="Phone Number *" value="" required/>
               </div>
                  <div class="form-label-group">
                  <input name="password" type="password" class="form-control" placeholder="Your Password *" value="" required/>
               </div>
                   <div class="form-label-group">
                 <input name="mail"  type="text" class="form-control" placeholder="Email ID" value="" required/>
               </div>

               <div class="custom-control custom-checkbox mb-3">
                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                 <label class="custom-control-label" for="customCheck1">Remember password</label>
               </div>
               <button name="reg" type="submit" style="background-color:#f229cd;color:#ffffff;" class="btn btn-lg btn-default btn-block text-uppercase" type="submit">Start Exploring</button>
             </form>
               </div>
         </div>
       </div>
     </div>
         </div></div></div>
 </body>
 </html>
