<?php

require_once("db.class.php");

$info = array();

$info['sender'] = 'VALERI BOJINOV'; // $_SESSION['logged_user']['first_name']
$info['message'] = $_REQUEST['message'];
$info['ondate'] = date("Y-m-d H:i:s");
$db->saveArray("messages", $info);
/*
echo "<pre>";
print_r($messages);
*/