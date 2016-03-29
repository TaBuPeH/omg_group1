<?php

 $loginDetails = array();
 $loginDetails = ($_POST);

 if($loginDetails['username'] == ''){
   echo 'Please enter a valid username!';
 }
 elseif ($loginDetails['password'] == ''){
   echo 'Please enter a valid password!';
 }
 else{
   echo '';
 }

?>
