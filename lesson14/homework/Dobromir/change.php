<?php

  session_start();

  if($_POST)
  {
    $_SESSION["username"] = $_POST["username"];
  }

  //  print_r($_SESSION);

 ?>

 <form method='post' action = 'change.php'>
   Username is taken, please enter another: <input type='text' name='username'><br>
   <input type='submit' value='Send'>
 </form>


 <br><br><br>
 <button onclick="location.href = 'show.php';">Next</button>
