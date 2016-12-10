<?php
	include 'functions.php';

	$asana->getWorkspaces();

	foreach ($asana->getData() as $workspace) {

		printArr($workspace);

	};


?>