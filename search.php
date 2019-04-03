<?php
session_start();
if(!isset($_SESSION['id']))
{
  header('Location : fashist/index.php');
}
$conn=mysqli_connect('localhost','root','','fashion');
$sql="select bust,hip,waist,body_shape from users where id='".$_SESSION['id']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="products container1">
    <div class="row">
      <div class="col-md-2">
          <?php  echo "<img class='demo hidden-xs hidden-sm' src='assets/images/".$row['body_shape']."-site.png'>";  ?>

          <div class="row ">
              <div class="col-xs-6">
      <?php  echo "<img style='height:450px;' class='demo visible-xs visible-sm' src='assets/images/".$row['body_shape']."-mob.png'>"; ?>
                  </div>
              <div class="col-xs-6 col-md-12">
                  <div class="topper">
              <div class="card pad">
                  <p class="paddy">1) Shoulder : 12cm</p>
                  </div>
                        <div class="card pad">
                  <p class="paddy"><?php echo "2) Bust size : ".$row['bust']."cm"; ?></p>
                  </div>
                        <div class="card pad">
                  <p class="paddy"><?php echo "3) Waist size : ".$row['waist']."cm"; ?></p>
                  </div>
                        <div class="card pad">
                  <p class="paddy"><?php echo "4) Hip size : ".$row['hip']."cm";?></p>
                  </div>

              </div><center><a href="/fashist/profile.php"> <button name="pro" type="submit" style="background-color:#f229cd;color:#ffffff;" class="btn  btn-default  text-uppercase" type="submit">UPDATE DETAILS</button></a></center></div>
              </div>

        </div>
         <div class="col-md-10 product">
             <div class="container1">
             <div class="row">
                 <div class="col-md-3">
         <div class="dropdown">
  <select name="search" onchange="getResults(this.value);" class="form-control" style="min-height:40px;border-radius:16px;font-size:18px;font-weight:400px;">
    <option selected disabled>Select for Suggestion</option>
  <option value="work_wear">Work Wear</option>
  <option value="corporate_parties">Corporate Parties</option>
    <option value="friday_dressing">Friday Dressing</option>
    <option value="night_out">Night out/ clubbing</option>
    <option value="brunch"  type="square">Brunch</option>
  <option value="high_tea_party">High Tea Party</option>
</select>

  </div></div>
                 <div class="col-md-6">
                   <div class="form-label-group">
                 <input id="custom" type="text" class="form-control" placeholder="Search products of your interest" style="min-height:20px;border-radius:16px;font-size:17px;font-weight:400px;" required/>
              </div>
                 </div>
                 <div class="col-md-3"><center> <button name="search" onclick="customResults()" type="submit" style="background-color:#f229cd;color:#ffffff;border:none;" class="btn  btn-default radius  text-uppercase" type="submit">Search Now !</button></center> </div>
                 </div>
        </div>
     <div id="top" class="top">

        </div>
</div>
      </div></div>
    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
function getResults(search) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("top").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "result.php?search="+search, true);
  xhttp.send();
}
function customResults() {
  var xhttp = new XMLHttpRequest();
  var search= document.getElementById('custom').value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("top").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "custom.php?search="+search, true);
  xhttp.send();
}
</script>
</body>
