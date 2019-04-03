<?php
session_start();
$occ=$_GET['search'];
$conn=mysqli_connect('localhost','root','','fashion');
$sql="select body_shape,skin from users where id='".$_SESSION['id']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$body_shape=$row['body_shape'];
$skin=$row['skin'];
$sql="select dress_type,$body_shape from $occ";
//echo $sql;
$res=mysqli_query($conn,$sql);
$i=0;
$type=array();
$style=array();
while($occrow=mysqli_fetch_array($res))
{
  $type[$i]=$occrow['dress_type'];
  $p=explode(',',$occrow[$body_shape]);
  for($j=0;$j<count($p);$j++)
  {
    $style[$i][$j]=$p[$j];
  }
  $i++;
}
$sql="select shade from skin_tone_".$skin;
//echo $sql;
$res=mysqli_query($conn,$sql);
$color=array();
$i=0;
while($clrow=mysqli_fetch_array($res))
{
  $p=explode(',',$clrow['shade']);
  for($j=0;$j<count($p);$j++)
  {
    $color[$i][$j]=$p[$j];
  }
  $i++;
}
$sql="select img,dress_type,name,price,amazon,flipkart,snapdeal from upload_image where occasion like '%$occ%' AND (";
$sub="(";
for($i=0;$i<count($type);$i++)
{
  $a=$type[$i];
  $sql=$sql."dress_type='$a' OR ";
  for($j=0;$j<count($style[$i]);$j++){
    $b=$style[$i][$j];
  $sub=$sub."style like '%$b%' OR ";
    }
}
$sql=substr($sql,0,-4);
$sub=substr($sub,0,-4);
$sql=$sql.") AND ".$sub." ) AND (";
for($i=0;$i<count($color);$i++)
{
  for($j=0;$j<count($color[$i]);$j++){
    $b=$color[$i][$j];
  $sql=$sql."color like '%$b%' OR ";
    }
}
$sql=substr($sql,0,-4);
$sql=$sql.")";
$res=mysqli_query($conn,$sql);
$final="<br>
<div class='row'>";
$i=0;
while($row=mysqli_fetch_array($res))
{
  if($i%4==0)
  {
    $final=$final."</div><br>
    <div class='row'>";
  }
  $img=$row['img'];
    $a=$row['amazon'];$f=$row['flipkart'] ;$s=$row['snapdeal'];$p=$row['price'];
    $final=$final."<div class='col-md-3 col-sm-6 col-xs-6'>
          <div class='product-grid2'>
              <div class='product-image2'>
                  <a href='#'>
                      <img class='pic' src='$img'>
                  </a>
              </div>
              <div class='product-content'>
                  <h3 class='title'><a href='#'>Women's Designer Top</a></h3>
                  <p  class='title'>Available on:</p>
                  <div class='row cont'>";
                  if($a!=""){$final=$final."<div class='col-md-12'><div class='navy'><a href='$a'><img class='size' src='./assets/images/amazon.png'></a></div></div>";}
                       if ($f!=""){$final=$final. "<div class='col-md-12'><div class='blue'><a href='$f'><img class='size' src='./assets/images/flipkart.png'></a></div></div>";}
                    if ($s!=""){$final=$final. "<div class='col-md-12'><div class='red'><a href='$s'><img class='size' src='./assets/images/snap.png'></a></div></div>";}
                  $final=$final."  </div>
                  <br>
                  <span class='price'>₹ $p </span>
              </div>
          </div>
      </div>";
      $i++;
}
$final=$final."</div>";
echo $final;
 ?>
