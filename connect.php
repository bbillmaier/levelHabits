<?php
	
	//connecting using PDO, because wtf am I? A farmer?
	
	$servername = "127.0.0.1";
	$username = "root";
	$password = "password";
	$database = "levelHabitsDB";

	try {
	    $dbh = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);
	    // set the PDO error mode to exception
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }


	//Example of a PDO request. http://php.net/manual/en/pdostatement.fetchall.php
	/*
	$sth = $dbh->prepare("SELECT * FROM users");
	$sth->execute();

	
	//print("Fetch all of the remaining rows in the result set:\n");
	$result = $sth->fetchAll();
	print_r($result);
	*/
?>