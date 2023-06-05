<? php
$server="localhost";
$uname="root";
$pvd="";
$db="fproject";
$con=mysqli_connect($server,$uname,$pvd,$db) or die("connection error");

     $sname=$_POST['sname'];
     $password=$_POST['pwd'];

   $que="select*from proj2 where sname='$sname'";
      $res=mysqli_query($con,$que);
          if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
             {
	           if($row['pwd']==$password)
	            {
		          echo"<script>alert('login sucess');windows.location.href='login';</script>";
	            }
	          else
	            {
		          echo"<script>alert('invalid password');windows.location.href='login'</script>";
	            }
             }
         else
             {
			echo"<script>alert('invalid username');windows.location.href='login'</script>";
             }
?>