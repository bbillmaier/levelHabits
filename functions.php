<?php

	include 'Habitica.php';
	
	$userId = 'c8df7513-0279-433a-947a-afee7c00ffee';
	$apiToken = '8e7cc041-b9ef-41a6-ac75-9d4c4926cd6f';

	$habitica = new Habitica($userId, $apiToken);
	function printArr($array){
		echo '<pre>';
			print_r($array);
		echo '</pre>';
	}
?>