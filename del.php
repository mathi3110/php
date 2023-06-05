<?php
$server="localhost";
$uname="root";
$pwd="";
$db="fproject";
$con=mysqli_connect($server,$uname,$pwd,$db)or die("db not connected");
$id=$_GET['id'];
$query = "delete  from proj1 WHERE id='$id'";
    if($result = mysqli_query($con, $query))
    
    
     {
     	echo"deleted";
     }
     else
     {
     	echo"error";
     }

  ?>