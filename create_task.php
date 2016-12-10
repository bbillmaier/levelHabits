<?php 

	include 'functions.php';
	$taskArray = array();

	$taskArray['type'] = 'todo';
	$taskArray['text'] = 'Dynamically Created Task';
	$taskArray['value'] = 8;
	$taskArray['note'] = 'This will be the assana task link';
	

	$result = $habitica->newTask($taskArray);

	printArr($tasks);


?>
