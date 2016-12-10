<?php

function get_asana_tasks(){

	$asana = new Asana(array(
		'personalAccessToken' => '0/32637edc751201d2e9d970badd364297'
	));

	$asana->getProjects();

	$tasksArray = array();

	$n = 0;
	foreach ($asana->getData() as $project) {

		//printArr($project);

		$asana->getProjectTasks($project->id);

		$tasksArray[$n] = $project->id;
		//echo $project->id.'<br>';
		$projectTasks = $asana->getData();


		//print_r($asana->getData());
		$n++;

		$i = 0;
		foreach ($projectTasks as $task) {
			
			$asana->getTask($task->id);

			$taskDetails = $asana->getData();

			$tasksArray[$project->id][$i] = $taskDetails;

			$i++;
		}
	};

	if ($asana->hasError()) {
	    echo 'Error while trying to connect to Asana, response code: ' . $asana->responseCode;
	    return;
	}

	return $tasksArray;
}


?>