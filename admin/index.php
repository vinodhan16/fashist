<?php
if(isset($_POST['login']))
{
$conn=mysqli_connect('localhost','root','','fashion');
$img=$_POST['userfile'];
$img=mysqli_real_escape_string($conn,$img);
$name=$_POST['name'];
$dress_type=$_POST['type'];
$style=$_POST['style'];
$color=$_POST['color'];
$price=$_POST['price'];
if(isset($_POST['amazon'])&&$_POST['amazon']!=""){
$amazon=$_POST['amazon'];
$amazon=mysqli_real_escape_string($conn,$amazon);
$sql="insert into upload_image(img,dress_type,style,color,name,price,amazon) VALUES('$img','$dress_type','$style','$color','$name','$price','$amazon')";
}
else if(isset($_POST['flip'])&&$_POST['flip']!=""){
$flip=$_POST['flip'];
$flip=mysqli_real_escape_string($conn,$flip);
$sql="insert into upload_image(img,dress_type,style,color,name,price,flipkart) VALUES('$img','$dress_type','$style','$color','$name','$price','$flip')";
}
else if(isset($_POST['snap'])&&$_POST['snap']!=""){
   $snap=$_POST['snapdeal'];
   $snap=mysqli_real_escape_string($conn,$amazon);
   $sql="insert into upload_image(img,dress_type,style,color,name,price,snapdeal) VALUES('$img','$dress_type','$style','$color','$name','$price','$snap')";
   }
$res=mysqli_query($conn,$sql);
}
 ?>

<html>
<head>
  <meta charset="utf-8">
  <title>Fashist</title>
  <link rel="icon" href="../assets/images/logo.png" type="image" sizes="16x16">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Roboto:500" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
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
                  <p class="measure">Enter Products</p>
     <form class="form-signin" method="post" action="">
             <div class="form-label-group">
           <input name="userfile" type="text" class="form-control" placeholder="Image Link" value="" required/>
              </div>

              <div class="form-label-group">
                 <input name="type" type="text" class="form-control" placeholder="Dress Type" value="" required/>
              </div>
                 <div class="form-label-group">
                  <input name="style" type="text" class="form-control" placeholder="Style Specification" value="" required/>
              </div>
                  <div class="form-label-group">
                 <input name="color" type="text" class="form-control" placeholder="Color" value="" required/>
              </div>
              <div class="form-label-group">
             <input name="name" type="text" class="form-control" placeholder="Product Name" value="" required/>
          </div>
              <div class="form-label-group">
             <input name="price" type="text" class="form-control" placeholder="Price" value="" required/>
          </div>
              <div class="form-label-group">
             <input name="amazon" type="text" class="form-control" placeholder="Amazon" value=""/>
          </div>
          <div class="form-label-group">
         <input name="flip" type="text" class="form-control" placeholder="Flipkart" value=""/>
      </div>
      <div class="form-label-group">
     <input name="snap" type="text" class="form-control" placeholder="Snapdeal" value=""/>
  </div>


            <center> <button name="login" type="submit" style="background-color:#f229cd;color:#ffffff;" class="btn  btn-default  text-uppercase" type="submit">Submit Profile</button></center>
            </form></div>
        </div></div></div>
      </body>
      </html>
