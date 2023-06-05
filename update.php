    <?php
                        $server="localhost";
                        $uname="root";
                        $pvd="";
                        $db="fproject";
                        $con=mysqli_connect($server,$uname,$pvd,$db) or die("do not connected");
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                       $regno=$_POST['rno'];
                       $gender=$_POST['gen'];
                       $district=$_POST['dist'];

                       $address=$_POST['addr'];
                       $email=$_POST['email'];
                       $password=$_POST['pwd'];
                        $que="update proj1 set name='$name' ,rno='$regno',gen='$gender',dist='$district',,addr='$address',email='$email',pwd='$password' WHERE id=$id ";
                        if($res=mysqli_query($con,$que))
                        {
                            echo"<script>alert('update successfully');window.location.href=view.php;</script>";
                        }
                        else
                        {
                            echo"<script>alert('error');window.location.href=view.php;</script>";

                        }
                        ?>
