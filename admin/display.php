<?php

//$id = $_GET['id'];

$conn=mysqli_connect('localhost','root','','fashion');
$sql = "SELECT * FROM upload_image";
$res = mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
$row=mysqli_fetch_array($res);

//echo $row['img'];

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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Aladin|Bad+Script|Handlee|Kaushan+Script|Rancho" rel="stylesheet">

</head>
<body>
  <div class="">
    <div class="row">

      <div class="col-xs-12 col-md-10  mx-auto">
        <div class="card card-signin ">
           <div class="container">
                <p class="measure">Search Results</p>
              <?php
              $img=$row['img'];
                $a=$row['amazon'];$f=$row['flipkart'] ;$s=$row['snapdeal'];$p=$row['price'];
               echo "<br>
            <div class='row'>

                <div class='col-md-3 col-sm-6 col-xs-6'>
                    <div class='product-grid2'>
                        <div class='product-image2'>
                            <a href='#'>
                                <img class='pic' src='$img'>
                            </a>
                        </div>
                        <div class='product-content'>
                            <h3 class='title'><a href='#'>Women's Designer Top</a></h3>
                            <p  class='title'>Available on:</p>
                            <div class='container'>
                            <div class='row'>";
                            if($a!=""){echo "<div class='col-md-12'><div class='navy'><a href='$a'><img class='size' src='../assets/images/amazon.png'></a></div></div>";}
                                 if ($f!=""){echo "<div class='col-md-12'><div class='blue'><a href='$f'><img class='size' src='../assets/images/flipkart.png'></a></div></div>";}
                              if ($s!=""){echo "<div class='col-md-12'><div class='red'><a href='$s'><img class='size' src='../assets/images/snap.png'></a></div></div>";}
                            echo"  </div></div>
                            <br>
                            <span class='price'>₹ $p </span>
                        </div>
                    </div>
                </div>
            </div>";?>
        </div>
    </div>
        </div></div></div>
</body>
</html>
