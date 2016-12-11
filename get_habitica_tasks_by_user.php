<?php
	include 'functions.php';

//get habitica tasks by ASANA USER ID
//function get_habitica_tasks_by_user($asanaID){
	$user = $userArray['228439276172045'];

	$habitica = new Habitica($user[0], $user[1]);

	$userInfo = $habitica->userTasks();

	printArr($userInfo);
	
//}
	
	
?>