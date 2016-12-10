<?php
	include 'functions.php';

	$asana->getProjects();

	foreach ($asana->getData() as $project) {

		printArr($project);

		$asana->getProjectTasks($project->id);

	};

	if ($asana->hasError()) {
	    echo 'Error while trying to connect to Asana, response code: ' . $asana->responseCode;
	    return;
	}

	printArr($asana->getData());

?>