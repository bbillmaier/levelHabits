<?php


	function printArr($array){
		echo '<pre>';
			print_r($array);
		echo '</pre>';
	}


	$userArray = array(
		'228439276172045' => array( 'bc40eff9-e00a-4509-b539-2c4e8723a098', '07d0acde-d952-458e-aad1-72ca50df05c2' ),
		'228443959134227' => array( 'c8df7513-0279-433a-947a-afee7c00ffee', '8e7cc041-b9ef-41a6-ac75-9d4c4926cd6f' )
	);


	//Classes for habitica and asana functionality
	include 'Habitica.php';
	include 'asana.php';

	//proprietary functions
	include 'get_all_tasks.php';
	//include 'user_array.php';
	include 'get_habitica_users.php';





?>