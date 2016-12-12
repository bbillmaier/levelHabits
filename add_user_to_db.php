<?php 

require 'functions.php';

	$auid = $_POST['asanaUID'];
	$huid = $_POST['habiticaUID'];
	$htkn = $_POST['habiticaToken'];

	$sth = $dbh->prepare("INSERT INTO users(asana_UID, habitica_UID, habitica_TOKEN) VALUES (:auid, :huid, :htkn)");
	$pdoExec = $sth->execute(array(":auid"=>$huid,":huid"=>$huid,":htkn"=>$htkn));

	if($pdoExec) {
		echo "Ta Da!";
	} else {
		echo "RIP";
	}


?>