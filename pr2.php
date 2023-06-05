<!DOCTYPE html>
<html>
<head>
	<title>sample form</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">

</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" action="pr6.php">
			<h1> Student Registration Form</h1>

			<div class="form-group">
				<label class="form-label">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter your name">
			</div>

			<div class="form-group">
				<label class="form-label">Reg no</label>
				<input type="text" class="form-control" name="rno" placeholder="Enter your register number">
			</div>

			<div class="form-group">
				<label class="form-label">Gender</label>
				<input type="radio" class="form-control-check" name="gen" value="Male">Male
				<input type="radio" class="form-control-check" name="gen" value="Female">Female
			</div>

			<div class="form-group">
				<label class="form-label">District</label>
				<select class="form-control" name="dist" >
					<option>Select the district </option>
					<option>pudukkottai</option>
					<option>tanjoor</option>
					<option>trichy</option>
					<option>sivagangai</option>
					

				</select>
			</div>

			
			<div class="form-group">
				<label class="form-label">Address</label>
				<textarea name="addr" class="form-control" rows="7">
				</textarea>
			</div>

			<div class="form-group">
				<label class="form-label">Email </label>
				<input type="email" class="form-control" name="email" placeholder="enter email id" required>
			</div>


			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="pwd" placeholder="enter email password" required>
			</div>

			

			<div class="form-group">
				<input type="submit" class="btn btn-success" name="submit" value="Save">

				<input type="reset" class="btn btn-danger" name="submit" value="Reset">

			</div>
			
		</form>
	</div>
</div>
</body>
</html>
