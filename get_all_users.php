<?php

function get_all_users($userArray){
	$resultsArray = array();

	$n = 0;
	foreach ($userArray as $user) {
		$userId = $user[0];
		$apiToken = $user[1];
		$habitica = new Habitica($userId, $apiToken);

		$userInfo = $habitica->userStats();
		$resultsArray[$n]['userInfo'] = $userInfo;	
		$userTasks = $habitica->userTasks();
		$resultsArray[$n]['userTasks'] = $userTasks;

		$n++;
	}

	return $resultsArray;
}
	
	
?>