<?php
session_start();
$occ=$_POST['search'];
$conn=mysqli_connect('localhost','root','','fashion');
$sql="select type from occasions where occasion='".$occ."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$temp=$row['type'];
$types=explode(',',$temp);
$sql="select body_shape,skin from users where id='".$_SESSION['id']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$body_shape=$row['body_shape'];
$skin=$row['skin'];
$style=array();
$color=array();
for($i=0;$i<count($types);$i++)
{
  $sql="select ".$body_shape.",".$skin." from fashion_data where dress_type='".$types[$i]."'";
  //echo $sql;
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res);
  $temp=$row[0];
  $temp1=$row[1];
  $st=explode(',',$temp);
  $c1=explode(',',$temp1);
  //echo $c1[0];
  for($j=0;$j<count($st);$j++)
  {
    $style[$i][$j]=$st[$j];
  }
  for($k=0;$k<count($c1);$k++)
  {
    $color[$i][$k]=$c1[$k];
  }
}
echo $color[0][0];
 ?>
