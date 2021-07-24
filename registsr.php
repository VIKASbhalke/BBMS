<?php
include"./connectxyz.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST[name];
$phnumber=$_POST[phnumber];
$bgroup=$_POST[bgroup];
$bydate=$_POST[bydate];

$query="INSERT INTO sendrequest(`name`,`phnumber`,`bgroup`,`bydate`)VALUES('$name','$phnumber','$bgroup','$bydate')";
$query_exec=mysqli_query($connection,$query);
echo"your data is stored";
}
else
	echo"your data not stored";
?>