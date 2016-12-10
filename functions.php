<?php

	include 'Habitica.php';
	include 'asana.php';

	$asana = new Asana(array(
		'personalAccessToken' => 'GET_IT_FROM_ASANA'
	));
	$userId = 'bc40eff9-e00a-4509-b539-2c4e8723a098';
	$apiToken = '07d0acde-d952-458e-aad1-72ca50df05c2';

	$habitica = new Habitica($userId, $apiToken);
	function printArr($array){
		echo '<pre>';
			print_r($array);
		echo '</pre>';
	}
?>