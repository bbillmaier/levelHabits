<?php
// DEPRECIATED. LEFT AS LEGACY
require 'functions.php';

$asanaTasks = get_asana_tasks($asana);
$users = get_all_users($userArray);
//printArr($asanaTasks);
printArr($userArray);

foreach ($asanaTasks as $projectID => $taskGroup) {
	foreach ($taskGroup as $task) {
		//printArr($task);

		$taskName = $task->name;
		$taskID = $task->id;
		$followers = $task->followers;

		$taskFollowers = array();
		echo $taskName.'<br/>';
		foreach ($followers as $follower) {
			$followerID = $follower->id;
			$taskFollowers[] = $followerID;
		}
		printArr($taskFollowers);
		echo '<br/>';
		echo '<br/>';

	}
}

foreach ($users as $user) {
	printArr($user);
}

?>