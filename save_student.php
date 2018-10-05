<!DOCTYPE html>
<html>
<head>
	<title>Saving your database</title>
</head>
<body>
	<?php 
	//store the form info in variables
	$first = filter_input(INPUT_POST, 'first');
	$last = filter_input(INPUT_POST, 'last');
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$student = filter_input(INPUT_POST,'student');
	

	//set a flag variable
	$ok = true;
	if(empty($first)){
		$ok = false;
		echo '<p> First Name is required</p>';
	}

	if(empty($last)){
		$ok = false;
		echo' <p> Last Name is required</p>';

	}

	if(empty($email) || $email == false){
		$ok = false;
		echo '<p> Email is required and must be valid email </p>';
	}

	if(empty($student)){
		$ok= false;
		echo'<p> Student Id is required</p>';
	}

	if($ok == true){
		//connnect to databse 
		require('db.php');

		//set up the sql qyery
		$sql = "INSERT INTO students(first,last, email, student)VALUES(:first, last:, email:, :student)";

		//prepare the statement 
		$cmd = $conn->prepare($sql);

		//bind parameters
		$cmd->bindParam(':fisrt', $first);
		$cmd->bindParam(':last', $last);
		$cmd->bindParam(':email', $email);
		$cmd->bindParam(':student', $student);

		//execute the query

		$cmd->execute();

		//show message
		echo'<p> Databse Saved! </p>';
		echo'<a href="/students.php"> View all new students</a>'

		//disconnecting

		$cmd->closeCursor();


	}


	 ?>
	

</body>
</html>