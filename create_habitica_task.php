<?php 

	require 'functions.php';
	$habitica = new Habitica('c8df7513-0279-433a-947a-afee7c00ffee', '8e7cc041-b9ef-41a6-ac75-9d4c4926cd6f');

	$taskArray = array();

	$taskArray['type'] = 'todo';
	$taskArray['text'] = 'Does this still work? 2';
	$taskArray['value'] = 8;
	$taskArray['note'] = '?????????????';
	

	//$result = $habitica->newTask($taskArray);


?>