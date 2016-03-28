<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

	<link rel='stylesheet' href="css/main.css" />
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src='js/carousel.js'></script>
  <script src='js/nav.js'></script>
  <script src='js/gallery.js'></script>
  <script src='js/video.js'></script>
  <script src='js/h.js'></script>
</head>

<body>


  <header>
    <div class = 'nav'>
      <img class = 'navImg' src="img/header.png" alt="nav">

        <div class='navButton' id='gallery'>Gallery</div>
        <div class='navButton' id='videos'>Videos</div>
        <a href="#"><img class = 'logo' src="img/logo.png" alt="prototype"></a>
        <div class='navButton' id='loginButton'>Login</div>
        <div class='navButton' id='registerButton'>Register</div>

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

    <img src = "">

    <div class = "form">

      <div id = "login">
        <div class = "title">Login</div>
        <div id = "login_notice"></div>
        <form method='post' action = 'ss.php'>
          <label for="login_username">Username</label>
    	    <input type='text' name='username' id="login_username">
          <label for="login_password">Password</label>
    			<input type='password' name='password' id = "login_password">
    			<input type='submit' value='LogIn' class = 'submit'>
    		</form>
      </div>


      <div id = "register">
        <div class = "title">Register</div>
        <form method='post' action = 'index.html'>
          <label for="register_username">Username</label>
    	    <input type='text' name='username' id="register_username">
          <label for="register_password">Password</label>
    			<input type='password' name='password' id = "register_password">
          <label for="register_email">Email</label>
    			<input type='email' name='email' id = "register_email">
    			<input type='submit' value='Register' class = 'submit'>
    		</form>
      </div>

    </div>
  </div>


  <div class='mainContainer'>

    <img id="overflowImg1" src="img/overflowImg1.png">
    <img id="overflowImg2" src="img/overflowImg2.png">

    <div class='gallery'>
      <div class ='title'> Gallery </div>
      <div class ='galleryImg'> <img src="img/gallery/img1_inactive.jpg" alt="1"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img2_inactive.jpg" alt="2"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img3_inactive.jpg" alt="3"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img4_inactive.jpg" alt="4"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img5_inactive.jpg" alt="5"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img6_inactive.jpg" alt="6"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img7_inactive.jpg" alt="7"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img8_inactive.jpg" alt="8"> </div>
      <div class ='galleryImg'> <img src="img/gallery/img9_inactive.jpg" alt="9"> </div>
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

  </footer>

</body>

</html>
