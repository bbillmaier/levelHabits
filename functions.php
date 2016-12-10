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
	require 'Habitica.php';
	require 'asana.php';

	global $asana;

	$asana = new Asana(array(
		'personalAccessToken' => '0/32637edc751201d2e9d970badd364297'
	));

	//proprietary functions
	require 'get_all_tasks.php';
	//require 'user_array.php';
	require 'get_all_users.php';





?>