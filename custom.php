<?php
$search=$_GET['search'];
$occ=['brunch','night','friday','corporate','tea','party','work','parties','outting'];
$color=['black','blue','red','green','purple','brown','yellow','orange'];
$dress=['skirt','tops','trouser','dresses'];
$conn=mysqli_connect('localhost','root','','fashion');
$matcolor=array();
$occmat=array();
$colormat=array();
$fincolor=array();
$split=explode(' ',$search);
$o=0;
$d=0;
$c=0;
for($i=0;$i<count($split);$i++)
{
  for($j=0;$j<count($occ);$j++)
  {
    if($occ[$j]==$split[$i])
    {
      $occmat[$o++]=$occ[$j];
    }
  }
  for($k=0;$k<count($dress);$k++)
  {
    if($dress[$k]==$split[$i])
    {
      $dressmat[$d++]=$dress[$k];
    }
  }
  for($l=0;$l<count($color);$l++)
  {
    if($color[$l]==$split[$i])
    {
      $colormat[$c++]=$color[$l];
    }
  }
}
if(count($colormat)>0)
{
  $sql="select shade from skin_tone_fair where ";
  for($i=0;$i<count($colormat);$i++)
  {
    $temp=$colormat[$i];
    $sql=$sql."color='$temp' OR ";
  }
  $sql=$sql=substr($sql,0,-4);
  $res=mysqli_query($conn,$sql);
  $i=0;
  while($clrow=mysqli_fetch_array($res))
  {
    $p=explode(',',$clrow['shade']);
    for($j=0;$j<count($p);$j++)
    {
      $fincolor[$i]=$p[$j];
      $i++;
    }
  }
  $sql=str_replace('skin_tone_fair','skin_tone_tan',$sql);
  $res=mysqli_query($conn,$sql);
  while($clrow=mysqli_fetch_array($res))
  {
    $p=explode(',',$clrow['shade']);
    for($j=0;$j<count($p);$j++)
    {
      $fincolor[$i]=$p[$j];
      $i++;
    }
    $i++;
  }
}
$sql="select img,dress_type,name,price,amazon,flipkart,snapdeal from upload_image where ";
$flags=0;
if(count($occmat)>0)
{
    $sql=$sql."(";
    for($i=0;$i<count($occmat);$i++)
    {
      $temp=$occmat[$i];
      $sql=$sql."occasion like '%$temp%' OR ";
    }
    $sql=substr($sql,0,-4);
    $sql=$sql.") ";
    $flags=1;
}
if(count($dressmat)>0)
{
  if($flags==1)
  {
    $sql=$sql."AND ";
  }
    $sql=$sql."(";
    for($i=0;$i<count($dressmat);$i++)
    {
      $temp=$dressmat[$i];
      $sql=$sql."dress_type like '%$temp%' OR ";
    }
    $sql=substr($sql,0,-4);
    $sql=$sql.") ";
    $flags=1;
}
if(count($fincolor)>0)
{
  if($flags==1)
  {
    $sql=$sql."AND ";
  }
    $sql=$sql."(";
    for($i=0;$i<count($fincolor);$i++)
    {
      $temp=$fincolor[$i];
      $sql=$sql."color like '%$temp%' OR ";
    }
    $sql=substr($sql,0,-4);
      $sql=$sql.") ";
}
   $res=mysqli_query($conn,$sql);
   //echo $sql;
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
