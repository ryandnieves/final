<?php
	
	date_default_timezone_set('America/New_York');
	
	
	$hostname = 'sql2.njit.edu';
	$username = 'rdn5';
	$password = 'DNb8Q7oFy';
	$database = 'rdn5';
	
	
    try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>