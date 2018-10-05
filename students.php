<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<main class="container">
		<h1>The list of students is as follows:</h1>
		<a href="index.php"> Add a new student data </a>
		<?php 
		ob_start();
		try {
			//connect to database
			require('db.php');

			//set up sql query
			$sql = " SELECT * FROM students";
            
            //prepare 

            $cmd = $conn->prepare($sql);

            //execute
            $cmd->execute();

            //use fetchAll to store the results
            $movies = $cmd->fetchAll();

            echo '<table class="table table-striped"
                    <thead>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Email Id</th>
                    <th> Student Id</th>
                    <th> Edit? </th>
                    <th> Delete?</th>
                    </thead>
                    <tbody>';

             foreach ($students as $student) {

             	# code...

             	echo '<tr>
             	  <td>' . $student['first'] . '</td>' 
             	 '<td>' . $student['last'] . '</td>'
             	 '<td>' . $student['email'] . '</td>'
             	 '<td>' . $student['student']. '</td>'
             	 '<td><a href="index.php?student_id=' . $student['student_id] . '"> Edit </a><td>
             	 <td><a href = "delete-student.php?movie_id=' . $movie['student_id'] . 'onclick=return confrim (\'Are you sure?\');"> Delete </a></td>
                 </tr>';
             }
             echo '</tbody></table>';

             //close cursor

             $cmd->closeCursor();
            		}

		catch (Exception $e){
			mail('shachimehta@yahoo.com' , 'Student Databse Issue', $e);
			header('Location:error.php');


		}
		ob_flush();

		 ?>
		
		 
	</main>

</body>
</html>