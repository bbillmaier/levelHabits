<?php

include 'functions.php';

$asanaTasks = get_asana_tasks();
$userTasks = get_habitica_users($userArray);
printArr($asanaTasks);
printArr($userTasks);
?>