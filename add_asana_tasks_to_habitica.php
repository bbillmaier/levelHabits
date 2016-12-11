<?php
/*
	This file adds the asana tasks to the habitica and then adds the habitica id to the database.
	
	This file will retrieve all of the tasks that have not yet been added to habitica, it does this by getting all of the tasks from the DB where there is no habitica id.
	It will then add the task to habitica, then add the habitica task ID to the DB.

*/
require 'functions.php';

	$getSTH = $dbh->prepare("SELECT * FROM tasks WHERE habitica_id IS NULL");
	$getSTH->execute();

	
	//print("Fetch all of the remaining rows in the result set:\n");
	$result = $getSTH->fetchall(PDO::FETCH_ASSOC);
	//printArr($result);

	//This will cycle through each task without a habitica_id. 
	foreach ($result as $task) {
		$getTask = $dbh->prepare("SELECT * FROM tasks WHERE id = ".$task['id']);
		$getTask->execute();

		$result = $getTask->fetchall(PDO::FETCH_ASSOC);
		printArr($result[0]);

		$taskDetails = $result[0];
		$taskFollowers = json_decode($taskDetails['asana_followers']);
		
		foreach ($taskFollowers as $taskFollower) {
			echo $taskFollower;

			$habiticaTask = create_task($taskFollower, 'todo', $taskDetails['task_name'], $taskDetails['task_description']);
			$habiticaID = mysql_escape_string($habiticaTask['habitRPGData']['data']['_id']);

			echo $habiticaID;

			$addHabiticaID = $dbh->prepare("UPDATE tasks SET habitica_id = '".$habiticaID."' WHERE asana_ID = ".$task['asana_ID']);
			$addHabiticaID->execute();
			printArr($habiticaTask);
		}

		//$habiticaID = $habiticaTask
	}



?>