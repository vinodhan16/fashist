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
echo $sql;
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
 ?>
