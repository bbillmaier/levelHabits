<?php 

	function create_task($asanaID, $type, $text, $note){
		global $dbh;
		$sth = $dbh->prepare("SELECT * FROM users WHERE asana_UID = ".$asanaID);
		$sth->execute();

		$user = $sth->fetchAll();
		
		printArr($user);

		$habiticaID = $user[0]['habitica_UID'];
		$habiticaTOKEN = $user[0]['habitica_TOKEN'];

		

		$habitica = new Habitica($habiticaID, $habiticaTOKEN);

		//print("Fetch all of the remaining rows in the result set:\n");
		$taskArray = array();

		$taskArray['type'] = $type;
		$taskArray['text'] = $text;
		$taskArray['note'] = $note;
		

		$result = $habitica->newTask($taskArray);
		return $result;
	}




?>
