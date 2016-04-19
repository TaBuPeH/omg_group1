<?php

  session_start();
  require_once('db.class.php');
  date_default_timezone_set("Europe/Helsinki");

  //user info
  $query = $_SESSION['logged_user'];
  $query = "SELECT * FROM `users` WHERE `users`.`username` = '".$_SESSION['logged_user']."'";
  $user = $db->fetchArray($query);
  $user = $user[0];

  //check for timeouts
  if(strtotime($user['timeOut']) > time()){
    echo "You can not do anything until " . $user['timeOut'];
  }
  else{

    //set 20 minutes timeout
    $user['timeOut'] = date("Y/m/d H:i:s a", time() + 1200);

    //0 for defence 1 for attack
    $stat = rand(0,1);
    //chance to succeed
    $chance = rand(0, 100);

    if($stat){

      //train for attack
      if($chance - $user['attack'] > 0){
        $user['attack'] ++;
        $db->saveArray("users", $user);
        echo 'You trained hard and increased your attack!';
      }
      //nothing happened
      else{
        $db->saveArray("users", $user);
        echo 'You trained hard but nothing happened...';
      }

    }
    else{
      //train for defence
      if($chance - $user['defence'] > 0){
        $user['defence']++;
        $db->saveArray("users", $user);
        echo 'You trained hard and increased your defence!';
      }
      //nothing happened
      else{
        $db->saveArray("users", $user);
        echo 'You trained hard but nothing happened...';
      }

    }
  }

 ?>
