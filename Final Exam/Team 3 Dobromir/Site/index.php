<!DOCTYPE html>
<html lang="en">

<head>
  <title>Final Project</title>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="viewport" content="width=device-width">

	<link rel='stylesheet' href="css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src='js/carousel.js'></script>
  <script src='js/nav.js'></script>
  <script src='js/gallery.js'></script>
  <script src='js/video.js'></script>
  <script src='js/ajax.js'></script>

</head>

<body>

  <header>
    <div class = 'nav'>
      <img class = 'navImg' src="img/header.png" alt="nav">

        <div class='navButton' id='gallery'>Gallery</div>
        <div class='navButton' id='videos'>Videos</div>
        <a href=""><img id = 'logo' src="img/logo.png" alt="prototype"></a>

        <?php

          session_start();
          if (empty($_SESSION))
          {
            echo "<div class='navButton' id='loginButton'>Login</div>";
            echo "<div class='navButton' id='registerButton'>Register</div>";
          }
          else
          {
            echo "<div class='navButton' id='fightButton'>Fight</div>";
            echo "<div class='navButton' id='logoutButton'>Logout</div>";

            require_once('db.class.php');
            $query = $_SESSION['logged_user'];
            $query = "SELECT * FROM `users` WHERE `users`.`username` = '".$_SESSION['logged_user']."'";
            $user = $db->fetchArray($query);
          }

        ?>

    </div>

    <div class = 'carousel'>
      <div class = 'glitch' id = 'glitch1'></div>
      <div class = 'glitch' id = 'glitch2'></div>
      <img class = 'carouselImg' src="img/carousel1.jpg" alt="carousel">
    </div>

    <div class='carouselButtons'></div>
  </header>

  <div id="background"></div>

  <div id="popup">

    <img id = 'full' src = "">

    <div id = "left_arrow"><img src="img/left_arrow.png" alt="left" /></div>
    <div id = "right_arrow"><img src="img/right_arrow.png" alt="right" /></div>

    <div class = "form">

      <div id = "login">
        <div class = "title">Login</div>
        <div id = "login_notice"></div>
        <form>
          <label for="login_username">Username</label>
    	    <input type='text' name='username' id="login_username">
          <label for="login_password">Password</label>
    			<input type='password' name='password' id = "login_password">
    			<input type='submit' value='LogIn' class = 'submit' id = 'login_submit'>
    		</form>
      </div>


      <div id = "register">
        <div class = "title">Register</div>
        <div id = "register_notice"></div>
        <form>
          <label for="register_username">Username</label>
    	    <input type='text' name='username' id="register_username">
          <label for="register_password">Password</label>
    			<input type='password' name='password' id = "register_password">
          <label for="register_email">Email</label>
    			<input type='email' name='email' id = "register_email">
    			<input type='submit' value='Register' class = 'submit' id = 'register_submit'>
    		</form>
      </div>


    </div>
  </div>


  <div class='mainContainer'>

    <img id="overflowImg1" src="img/overflowImg1.png">
    <img id="overflowImg2" src="img/overflowImg2.png">

    <?php

      if (empty($_SESSION))
      {
        echo "<div class='info'>
                <div class ='title'> Welcome Guest </div>
                <div class ='text'> These are your stats </div>
                <div class ='stats'> Attack: n/a</div>
                <div class ='stats'> Rank: n/a</div>
                <div class ='stats'> Defence: n/a</div>
                <div class ='stats'> Health: n/a</div>
                <div class ='stats'><img id ='rank' src='img/ranks/rank_0.png'></div>
                <div class ='stats'> Wins: n/a</div>
                <div class ='text'> You must be logged in to play!</div>

              </div>";
      }
      else
      {

        echo "<div class='info'>
                <div class ='title'> Welcome " . $user[0]['username'] . "</div>
                <div class ='text'> These are your stats </div>
                <div class ='stats'> Attack: " . $user[0]['attack'] . "</div>
                <div class ='stats'> Rank: " . $user[0]['rank'] . "</div>
                <div class ='stats'> Defence: " . $user[0]['defence'] . "</div>
                <div class ='stats'> Health: " . $user[0]['health'] . "</div>
                <div class ='stats'><img id ='rank' src='img/ranks/rank_" . $user[0]['rank'] . ".png'></div>
                <div class ='stats'> Wins: " . $user[0]['wins'] . "</div>
                <input type='submit' value='Rest' class = 'submit' id = 'rest'>
                <input type='submit' value='Train' class = 'submit' id = 'train'>
                <input type='submit' value='Fight' class = 'submit' id = 'fight'>
              </div>";
      }

    ?>

    <div class='gallery'>
      <div class ='title'> Gallery </div>
      <div class ='galleryImg'> <img src="img/gallery/img01_inactive.jpg" alt="1"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img02_inactive.jpg" alt="2"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img03_inactive.jpg" alt="3"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img04_inactive.jpg" alt="4"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img05_inactive.jpg" alt="5"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img06_inactive.jpg" alt="6"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img07_inactive.jpg" alt="7"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img08_inactive.jpg" alt="8"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img09_inactive.jpg" alt="9"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img10_inactive.jpg" alt="10"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img11_inactive.jpg" alt="11"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img12_inactive.jpg" alt="12"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img13_inactive.jpg" alt="13"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img14_inactive.jpg" alt="14"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img15_inactive.jpg" alt="15"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img16_inactive.jpg" alt="16"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img17_inactive.jpg" alt="17"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img18_inactive.jpg" alt="18"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img19_inactive.jpg" alt="19"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img20_inactive.jpg" alt="20"> </div>
    </div>


    <div class='videos'>
      <div class ='title'> Videos </div>

      <div class ='videoImg'> <img src="img/video_1.jpg" alt="1"> </div>
      <div class ='videoImg'> <img src="img/video_2.jpg" alt="2"> </div>
      <iframe src=""  allowfullscreen></iframe>
    </div>

  </div>


  <footer>

    <div class="logo"><img src="img/logo_PS4.png" alt="logo_1" /></div>
    <div class="logo"><img src="img/logo_actvs.png" alt="logo_2" /></div>
    <div class="logo"><img src="img/logo_xbox.png" alt="logo_3" /></div>

    <div class = 'social_row'>
      <div class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
      <div class="social"><i class="fa fa-twitter-square" aria-hidden="true"></i></div>
    </div>

    <div id='facebook_hover'><img src="img/facebook_hover.png" alt="facebook_hover" /></div>
    <div id='twitter_hover'><img src="img/twitter_hover.png" alt="twitter_hover" /></div>

    <div id='logo_left'><img src="img/logo_radical.png" alt="logo_4" /></div>
    <div id='logo_right'><img src="img/logo_rp.png" alt="logo_5" /></div>

    <span class="copyright">The "Sony" Family logo is a registered trademark and "PS4" is a trademark of Sony Computer Entertainment Inc.</span>

  </footer>

</body>

</html>
