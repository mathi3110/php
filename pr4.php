<?php
$server="localhost";
$uname="root";
$pvd="";
$db="fproject";
$con=mysqli_connect($server,$uname,$pvd,$db);

$name=$_POST['name'];
$regno=$_POST['rno'];
$gender=$_POST['gen'];
$district=$_POST['dist'];
$address=$_POST['addr'];
$email=$_POST['email'];
$password=$_POST['pwd'];

$query="insert into proj1 values('$name','$regno','$gender','$district','$address','$email','$password')";
if(isset($_POST['submit']))
{
	if($res=mysqli_query($con,$query))
	{
	echo"<script>alert('data saved');</script>";
}
else
{
	echo"<script>alert('data error');</script>";

}

}
?>