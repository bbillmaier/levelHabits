<?php

require 'functions.php';

$asanaTasks = get_asana_tasks($asana);
$userTasks = get_habitica_users($userArray);
printArr($asanaTasks);
printArr($userTasks);

foreach ($variable as $key => $value) {
	# code...
}
?>