<!DOCTYPE html>
<html>
<head>
	<title>Student Database</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<main class="container">
		<form method="post" action="save_movie.php">
		  <div class="form-group">
		  	<label> First Name </label>
		  		<input type="text" name="fist" class="form-control">		  		
		  	</div>	

		  	<div class="form-group">
		  	<label> Last Name </label>
		  		<input type="text" name="last" class="form-control">		  		
		  	</div>

		  	<div class="form-group">
		  	<label> Email Id </label>
		  		<input type="text" name="email" class="form-control">		  		
		  	</div>

		  	<div class="form-group">
		  	<label> Student Id </label>
		  		<input type="text" name="student" class="form-control">		  		
		  	</div>
		  	<input type="submit" value="send" class="btn btn-primary">
		</form>
    </main>
</body>
</html>