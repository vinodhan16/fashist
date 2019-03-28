
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
<div class="container top">
    <div class="card card-signin my-5">
          <div class="card-body" style="background-color:#ffffff;">
              <div class="container1">
                   <h2 class="card-title text-center">Search Outfit</h2>
                  <br>
                  <p class="measure">Occassions</p>
     <form class="form-signin" method="post" action="">
         <div class="row">
             <div class="col-md-2">
             <div class="form-label-group" >
                  <div class="dropdown" >
    <button  class="btn btn-default dropdown-toggle"  type="button" style="width:100%;" data-toggle="dropdown">Search Products
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="border-radius:13px;">
         <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Office <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" value="western" onclik>Western</a></li>
          <li><a tabindex="-1" href="#">Indian</a></li>
        </ul>
      </li>
      <li><a tabindex="-1" href="#">Sports</a></li>
         <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Marriage <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Western</a></li>
          <li><a tabindex="-1" href="#">Indian</a></li>
        </ul>
      </li>
      <li><a tabindex="-1" href="#">Casuals</a></li>
        <li><a tabindex="-1" href="#">Indian Festivals</a></li>
     
    </ul>
  </div>
              </div></div>
             <div class="col-md-6">  <input name="bust" type="text" class="form-control" style="border-radius:15px;padding:10px;" placeholder="Search Clothing for Occassions..." value="" required/></div>
             <div class="col-md-3">
                 <button name="login" type="submit" style="background-color:#f229cd;color:#ffffff;" class="btn  btn-default  text-uppercase" type="submit">Search</button></div>
           </div> </form></div>
        </div></div></div>
    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
    <style>
        .btn-default:hover{
            text-decoration: none !important;
          
        }
        .dropdown
        {
            text-align: left !important;
        }
        .dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}</style>
      </body>
      </html>
