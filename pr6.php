<?php
$server="localhost";
$uname="root";
$pvd="";
$dbname="fproject";
try
{
$name=$_POST['name'];
$regno=$_POST['rno'];
$gender=$_POST['gen'];
$district=$_POST['dist'];

$address=$_POST['addr'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$con=new PDO("mysql:host=$server;dbname=$dbname",$uname,$pvd);
$query="insert into proj1(name,regno,gender,district,address,email,password) values(:name,:rno,:gen,:dist,:addr,:email,:pwd)";
$stmt=$con->prepare($query);
if($stmt->execute([':name'=>$name,':rno'=>$regno,':gen'=>$gender,':dist'=>$district,':addr'=>$address,':email'=>$email,':pwd'=>$password]))
{
	
	echo"<script>alert('saved');</script>";
}
else
{
	echo"<script>alert('error');</script>";
}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>