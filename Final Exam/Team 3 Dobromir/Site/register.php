<?php

require_once('db.class.php');

$user = $_POST;

$hasError = 0;

//trim spaces
foreach($user as $k=>$v)
{
	$user[$k] = trim($user[$k]);
}

//check if email is used
$query = "SELECT * FROM `users` WHERE `users`.`email` = '".$user['email']."'";
$result = $db->fetchArray($query);

if(count($result) > 0)
{
	$hasError = 5;
}

//check email length
if(strlen($user['email']) < 6)
{
	$hasError = 4;
}

// check pass length
if(strlen($user['password']) < 4)
{
	$hasError = 3;
}

//check if username is taken
$query = "SELECT * FROM `users` WHERE `users`.`username` = '".$user['username']."'";
$result = $db->fetchArray($query);

if(count($result) > 0)
{
	$hasError = 2;
}

//check username length
if(strlen($user['username']) < 4)
{
	$hasError = 1;
}

//no errors
if($hasError == 0)
{
	// set the basic stats
	$user['password'] = md5($user['password']);
	$user['attack'] = 5;
	$user['defence'] = 5;
	$user['health'] = 100;
	$user['wins'] = 0;
	$user['rank'] = 0;
	$db->saveArray("users", $user);
}

//short username
if($hasError == 1)
{
	echo "Username is too short!";
}

//taken username
if($hasError == 2)
{
	echo "Username is already taken!";
}

//short pass
if($hasError == 3)
{
	echo "Password is too short!";
}

//short email
if($hasError == 4)
{
	echo "Email is too short!";
}

//taken email
if($hasError == 5)
{
	echo "Email is already used!";
}

?>
