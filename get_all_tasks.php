<?php
	include 'functions.php';

	$asana->getProjects();

	$tasksArray = array();

	$n = 0;
	foreach ($asana->getData() as $project) {

		//printArr($project);

		$asana->getProjectTasks($project->id);

		$tasksArray[$n] = $project->id;
		echo $project->id.'<br>';
		$projectTasks = $asana->getData();


		print_r($asana->getData());
		$n++;

		$i = 0;
		foreach ($projectTasks as $task) {
			
			$asana->getTask($task->id);

			echo $task->id.'<br>';

			$taskDetails = $asana->getData();

			$tasksArray[$project->id][$i] = $taskDetails;

			$i++;
		}
	};

	if ($asana->hasError()) {
	    echo 'Error while trying to connect to Asana, response code: ' . $asana->responseCode;
	    return;
	}

	printArr($tasksArray);
?>