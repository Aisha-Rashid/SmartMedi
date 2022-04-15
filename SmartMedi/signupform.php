<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => ehr_databasereview
		$conn = mysqli_connect("localhost", "root", "", "ehr_databasereview");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$TelNo = $_REQUEST['TelNo'];
		$IDNo = $_REQUEST['IDNo'];
		$DOB = $_REQUEST['DOB'];
		$GenderID = $_REQUEST['Gender'];
		$RoleID = $_REQUEST['Role'];
		$Email = $_REQUEST['Email'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO patientdetails VALUES ('$RoleID','$IDNo','','$FirstName',
			'$LastName','$GenderID','$DOB','','','','$TelNo','$Email','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$FirstName\n $LastName\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
