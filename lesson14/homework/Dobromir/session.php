<?php

  session_start();
  $_SESSION = $_POST;
  echo "Information is saved";
  echo "<pre>";
  print_r($_SESSION);
?>


 <br>
 <button onclick="location.href = 'change.php';">Next</button>
