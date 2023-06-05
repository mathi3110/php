<html>
<head>
	<title>LOGIN BAGE</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"></head>

<body>
     <div class="container">
     <div class="row"></div>
     <form method="post" action="pr3.php" >
     	<h3 align="" > LOGIN PAGE </h3>
        <div class="form-group" >
        <label class="form-lable">uname</label>
        <input type="text" name="sname" placeholder="enter your name " required >	</div>

        <div class="form-group">
        <lable class="form-lable">Password</lable>
        <input type="password" name="psw" placeholder="enter your password" required></div>

        <div class="form-group">
	     <input type="submit" class="btn btn-success" name="submit" value="Save">
         <input type="reset" class="btn btn-danger" name="submit" value="Reset">

	    </div>
      </form>
</div>
</body>
</html>        