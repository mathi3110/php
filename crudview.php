<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">view Details</h2>
                       
                    </div>
     <?php
  $server="localhost";
$uname="root";
$pwd="";
$db="fproject";
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
    $query="select * from proj1 ";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $row=$stmt->fetchAll();
    echo '<table class="table table-bordered table-striped">';
     echo "<thead>";
       echo "<tr>";
        echo "<th>id</th>";
    echo"<th>name</th>";
    echo"<th>regno</th>";
   
    echo"<th>gender</th>";
    echo"<th>district</th>";
     echo"<th>address</th>";
    echo"<th>email</th>";
    echo" <th>password</th>";
    
   
   
    echo"<th></th>";
    echo"<th></th>";
    echo"<th></th>";

   echo "<th>Action</th>";
      echo "</tr>";
     echo "</thead>";
   echo "<tbody>";


    foreach($row as $value)
    {
        $id=$value[0];
        $name=$value[1];
        $regno=$value[2];
        $gender=$value[3];
        $district=$value[4];
        $address=$value[5];
       
        $email=$value[6];
        $password=$value[7];
       
        
        
         echo "<tr>";
     echo "<td>" .$id . "</td>";
   echo "<td>" .$name  . "</td>";
   echo "<td>" .$regno. "</td>";
    echo "<td>" .$gender  . "</td>";
    echo "<td>" . $district . "</td>";
   echo "<td>" . $address . "</td>";

   echo "<td>" . $email . "</td>";
   echo "<td>" .$password  . "</td>";  
  
   
      echo "<td>";
  echo '<a href="update.php?id='. $id.'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
 echo '<a href="del.php?id='. $id .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
 echo "</td>";
 echo "</tr>";   
        
    }
       echo "</tbody>";                            
       echo "</table>";
    ?> </div>
            </div>        
        </div>
    </div>
</body>
</html>
