<?php

  // function for attack
  function attack($player, $opponent){

    $opponentDefence =  $opponent['defence'] * rand(5,10) / 10;
    $playerAttack = $player['attack'] * (rand(0,1) + 0.5 * rand(0,2));
    $playerAttack = $playerAttack - $opponentDefence;

    if($playerAttack < 0){
      $playerAttack = 0;
    }

    return $playerAttack;

  }

  session_start();
  require_once('db.class.php');
  date_default_timezone_set("Europe/Helsinki");

  //user info
  $query = $_SESSION['logged_user'];
  $query = "SELECT * FROM `users` WHERE `users`.`username` = '".$_SESSION['logged_user']."'";
  $user = $db->fetchArray($query);
  $user = $user[0];

  //Check for timeouts
  if(strtotime($user['timeOut']) > time()){
    echo "You can not do anything until " . $user['timeOut'];
  }
  else{

    //set 10 minutes timeout
    $user['timeOut'] = date("Y/m/d H:i:s a", time() + 600);

    if($user['health'] == 0){
      echo "You do not have health and can not fight!";
    }
    else{

      //find opponent
      $query = "SELECT * FROM `users` WHERE `users`.`username` != '".$_SESSION['logged_user']."'";
      $opponent = $db->fetchArray($query);
      $opponent = $opponent[rand(0, sizeof($opponent) - 1)];


      //fight
      while($opponent['health'] > 0 && $user['health'] > 0){

        $opponent['health'] = $opponent['health'] - attack($user, $opponent);
        $user['health'] = $user['health'] - attack($opponent, $user);

      }

      //check for draw
      if($user['health'] <= 0 && $opponent['health'] <= 0){

        $user['health'] = 0;
        $opponent['health'] = 0;
        $db->saveArray("users", $user);
        $db->saveArray("users", $opponent);
        echo "Draw!";
      }
      else{

        //if p1 won
        if($user['health'] <= 0){

          $user['health'] = 0;
          $opponent['wins']++;
          $opponent['rank'] = $opponent['wins'] / 10;

          //calculate rank
          if($opponent['rank'] > 11){
            $opponent['rank'] = 11;
          }

          $db->saveArray("users", $user);
          $db->saveArray("users", $opponent);
          echo 'You lost the fight against ' . $opponent['username'] . ' !';

        }

        //if p2 won
        if($opponent['health'] <= 0){

          $opponent['health'] = 0;
          $user['wins']++;
          $user['rank'] = $user['wins'] / 10;

          //calculate rank
          if($user['rank'] > 11){
            $user['rank'] = 11;
          }

          $db->saveArray("users", $user);
          $db->saveArray("users", $opponent);
          echo 'You won the fight against ' . $opponent['username'] . ' !';

        }
      }
    }
  }

?>
