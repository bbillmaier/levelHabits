<?php
	require 'functions.php';

	$asana->getProjects();

	foreach ($asana->getData() as $project) {

		printArr($project);

	};


?>