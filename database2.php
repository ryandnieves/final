<?php
	
	date_default_timezone_set('America/New_York');
	
	
	
	//$hostname = 'localhost';
	//$username = 'root';
	//$password = '';
	//$database = 'rdn5';
	$hostname = 'sql2.njit.edu';
	$username = 'rdn5';
	$password = 'DNb8Q7oFy';
	$database = 'rdn5';
	
	
    try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
		
		// sql to create table
		$sql = "CREATE TABLE RegInfo (
		id INT(6) AUTO_INCREMENT PRIMARY KEY, 
		fullName VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
		password VARCHAR(255),
		Date date,
		phoneNumber VARCHAR(255),
		gender VARCHAR(255)
		);";

		if ($db->query($sql) === TRUE) {
			echo "Table MyGuests created successfully";
		} else {
			//echo "Error creating table: " . $db->error;
		} 
			//$firstName = $email = $password = $birthDate = $country = '';
			$firstName = $_POST["firstName"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$birthDate = $_POST["birthDate"];
			$gender = $_POST["gender"];
			$number = $_POST["number"];
		$sql2 = "INSERT INTO RegInfo (fullName, email, password, Date, gender, phoneNumber) VALUES ('$firstName', '$email' , '$password', '$birthDate', '$gender', '$number');";
		if ($db->query($sql2) === TRUE) {
			echo "Table MyGuests created successfully";
			$message = "Database accessed";
			echo "<script type='text/javascript'>alert('$message');</script>";	
		} else {
			echo "Error creating table: " + $sql->error;
		}
		//$db->close();
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        //include('database_error.php');
        exit();
    }
?>
