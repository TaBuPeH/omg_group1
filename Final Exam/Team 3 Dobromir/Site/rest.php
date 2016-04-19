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

    //set 30 miutes timeout
    $user['timeOut'] = date("Y/m/d H:i:s a", time() + 1800);

    //check if hp is full
    if($user['health'] == 100){

      echo "You do not need to rest, you are ready to fight!";
    }
    else{

      //calculate hp to restore
      $restoredHP = 100 * rand(0, 2) * rand(10,35) / 100 ;

      //check if you restored 0 hp
      if($restoredHP == 0){
        $db->saveArray("users", $user);
        echo 'You wanted to rest but you could not fall asleep!';
      }
      else{

        //check if your hp become more than 100
        if($restoredHP + $user['health'] > 100){
          $temp = 100 - $user['health'];
          $user['health'] = 100;
          $db->saveArray("users", $user);
          echo 'You slept like a baby and restored '. $temp .' health!';
        }
        //restore hp
        else{
          $user['health'] = $restoredHP + $user['health'];
          $db->saveArray("users", $user);
          echo 'You slept like a baby and restored '. $restoredHP. ' health!';
        }
      }
    }
  }
?>
