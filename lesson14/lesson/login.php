<?php
	session_start();

	echo "<pre>";


	$user[0]['username'] = 'valeri';
	$user[0]['password'] = 'malkokote';
	$user[0]['numberOfWomen'] = 0;

	$user[0]['numberOfKifli'] = 10;
	
	
	$user[1]['username'] = 'joro';
	$user[1]['password'] = '1234';
	$user[1]['numberOfWomen'] = 5;
	$user[1]['numberOfKifli'] = 0;
	
	print_r($user);
	print_r($_POST);

	$ourLoggedUser = array();

	foreach($user as $k=>$value)
	{
		if($value['username'] == $_POST['user'])
		{
			if($value['password'] == $_POST['pass'])
			{
				$ourLoggedUser = $value;

			}	
		}
	}

print_r($ourLoggedUser);

$_SESSION['user'] = $ourLoggedUser;

