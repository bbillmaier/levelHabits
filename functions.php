<?php
	include 'connect.php';

	function printArr($array){
		echo '<pre>';
			print_r($array);
		echo '</pre>';
	}

	$sth = $dbh->prepare("SELECT * FROM users");
	$sth->execute();

	
	//print("Fetch all of the remaining rows in the result set:\n");
	$users = $sth->fetchAll();
	//printArr($users);

	$userArray = array();

	foreach ($users as $user) {
		$userAUID = $user['asana_UID'];
		$userHUID = $user['habitica_UID'];
		$userHTOKEN = $user['habitica_TOKEN'];
		$userArray[$userAUID]['huid'] = $userHUID;
		$userArray[$userAUID]['htoken'] = $userHTOKEN;
	}

	//printArr($userArray);


	//Classes for habitica and asana functionality
	require 'Habitica.php';
	require 'asana.php';

	global $asana;

	$asana = new Asana(array(
		'personalAccessToken' => '0/32637edc751201d2e9d970badd364297'
		//'personalAccessToken' => '0/1f839ee5b1351779f35f4e264312d6ed'
	));

	//proprietary functions
	require 'get_all_tasks.php';
	//require 'user_array.php';
	require 'get_all_users.php';
	require 'create_task.php';


	//printArr(create_task(228439276172045, 'todo', 'testing the return', 'this worked'));

?>