<?php
	include 'functions.php';
	$habitica = new Habitica($userId, $apiToken);


	$things = get_all_users($habitica);
	printArr($things);






?>