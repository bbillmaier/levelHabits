<?php
	require 'functions.php';

	$asana->getWorkspaces();

	foreach ($asana->getData() as $workspace) {

		printArr($workspace);

	};


?>