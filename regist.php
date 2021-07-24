<?php
include"./connectxyz.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST[name];
$dob=$_POST[dob];
$gender=$_POST[gender];	
$email=$_POST[email];
$phonenumber=$_POST[phonenumber];
$bloodgroup=$_POST[bloodgroup];
$psw=$_POST[psw];
$cpsw=$_POST[cpsw];
$query="INSERT INTO people(`name`,`dob`,`gender`,`email`,`phonenumber`,`bloodgroup`,`psw`,`cpsw`)VALUES('$name','$dob','$gender','$email','$phonenumber','$bloodgroup','$psw','$cpsw')";
$query_exec=mysqli_query($connection,$query);
echo"your data is stored";
}
else
	echo"your data not stored";
?>