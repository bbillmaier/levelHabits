<?php


	function printArr($array){
		echo '<pre>';
			print_r($array);
		echo '</pre>';
	}

	include 'Habitica.php';
	include 'asana.php';



	include 'get_all_tasks.php';
	include 'user_array.php';
	include 'get_habitica_users.php';


	//$thing = get_asana_tasks();



?>