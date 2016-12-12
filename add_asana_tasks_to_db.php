<?php
//This file adds the asana tasks to the database.
require 'functions.php';

$asanaTasks = get_asana_tasks($asana);
$users = get_all_users($userArray);

	

	$sth = $dbh->prepare("INSERT INTO tasks(asana_ID, asana_followers, task_name, task_description) VALUES (:aid, :followers, :name, :notes)");
	$sth->bindParam(':aid', $taskID);
	$sth->bindParam(':followers', $taskFollowers);
	$sth->bindParam(':name', $taskName);
	$sth->bindParam(':notes', $taskNotes);

	$checkSTH = $dbh->prepare("SELECT id FROM tasks WHERE  asana_ID = :aid");
	$checkSTH->bindParam(':aid', $taskID);

foreach ($asanaTasks as $projectID => $taskGroup) {
	foreach ($taskGroup as $task) {
		printArr($task);

		$taskName = $task->name;
		$taskID = $task->id;
		$followers = $task->followers;
		$taskNotes = $task->notes;

		$taskFollowers = array();
		//echo $taskName.'<br/>';
		foreach ($followers as $follower) {
			$followerID = $follower->id;
			$taskFollowers[] = $followerID;
		}

		$taskFollowers = json_encode($taskFollowers);

		$checkSTH->execute();
		
		$result = $checkSTH->fetchAll();
		//printArr($result);
		
		//if the asana task is not in the database, add it.
		if(empty($result)){
			$sth->execute();
		}
		

		
		//print("Fetch all of the remaining rows in the result set:\n");

	}
}

	$sth2 = $dbh->prepare("UPDATE meta SET last_import= (now()) WHERE id=1");
	$sth2->execute();

?>