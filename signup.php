<?php
session_start();
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
header('location: /fashion/index.php');
mysqli_close($conn);
}
?>

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
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>You are one step ahead!.</p>
                </div><form method="post" action="">
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="name"  type="text" class="form-control" placeholder="Your Name *" value="" required/>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                              <input name="phone" type="text" class="form-control" placeholder="Phone Number *" value="" required/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Your Password *" value="" required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                            <input name="mail"  type="text" class="form-control" placeholder="Email ID" value="" required/>
                        </div>
                    </div>
                </div>
                <center><button name="reg" type="submit" class="btnSubmit">Submit</button></center>
            </div>
          </form>
        </div>
      </body>
      </html>
