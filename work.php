<html>
<head>
<body>
	
<?php
	include_once 'pdoConnect.php';

	if (!isset($_REQUEST['email'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. No email data provided.");
	}

	$params = array(
		":email" => $_REQUEST['email'],
	);

	$results = prepareAndExecute('INSERT INTO accounts (email) VALUES (:email)', $params);

	if ($results == NULL || !is_numeric($results)) {
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database.");
	}

?>

</body>
</head>
</html>