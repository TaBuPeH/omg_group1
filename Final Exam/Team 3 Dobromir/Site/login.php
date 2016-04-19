<?php

session_start();
require_once('db.class.php');

$user = $_POST;

//trim and escape the input
foreach($user as $k=>$v)
{
	$user[$k] = trim($user[$k]);
	$user[$k] = mysqli_real_escape_string($db->dbHandle, $user[$k]);
}

//find the right user from db
$query = "SELECT * FROM `users` WHERE `users`.`username` = '".$user['username']."'";
$result = $db->fetchArray($query);

//check if the user exists
if(count($result) > 0)
{

	//check if pass matches
	if($result[0]['password'] == md5($user['password']))
	{
		$_SESSION['logged_user'] = $user['username'];
	}

	else
	{
		echo "Wrong username or password";
	}

}
else
{
	echo "Wrong username or password";
}

?>
