<?php
$server="localhost";
$uname="root";
$pvd="";
$dbname="fproject";

$sname=$_POST['sname'];
$password=$_POST['pwd'];
$con=new PDO("mysql:host=$server;dbname=$dbname",$uname,$pvd);
$query="select * from proj2 where sname=:sname;";
$stmt=$con->prepare($query);
$res=$stmt->execute([":sname"=>$sname]);
if($row=$stmt->fetchAll())
{
  foreach($row as $value)
  {
    $pwrd=$value[2];
  }
  if ($pwrd==$pwd) 
  {
   echo"<script>alert('success');</script>";
  }
else
{
  echo"<script>alert('password error');</script>";
}
}
else
{
  echo"<script>alert('uname error');</script>";
}

?>
