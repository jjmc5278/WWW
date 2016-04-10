<!DOCTYPE>
<html>
	<head>
		<title> Registration </title>
	</head>
	<body>
	
	
	<?php
	//Create variables to meet database porting.
        $servername = "localhost";
	$username = "casey112";
	$password = "Dawne5278"; //temp pass for final project
	$port = 3306;
	//variable for login to database
	$conn = new mysqli($servername, $username, $password, casey112_project25, $port);
	if($conn->connect_errno){ //checks if connection passes
		echo "Failed to connect to Database";}
	echo $conn -> host_info . "<br>"; //display connection success
	
	$Fname = $_POST["Fname"];
	$Lname = $_POST["Lname"];
	$Email = $_POST["Email"];
	$User = $_POST["User"];
	$Pass = $_POST["Pass"];
	//make variables local
$register = "INSERT INTO Login (USERNAME, PASSWORD, EMAIL, Fname, Lname) Values ('$User','$Pass','$Email','$Fname','$Lname')";
	//variable for inserting into database must make secure
	if($conn->query($register) == true){
	echo "New record created";
	} else {
	echo "Error: " . $register . "<br>" .$conn->error;
	}
	
	$conn->close();
	?>	
	
	
	</body>
</html>