$(document).ready(function(){

  $('.navButton').mouseover(function(){

    //some comment here
    if($(this).index() < 3){

      //buttons on the left side of the logo
      $(this).css({
        transform: "rotate(3deg)",
      	textDecoration: "underline",
      	color: "rgb(240, 240, 240)",
      });

    }
    //buttons on the righ side of the logo
    else {

      $(this).css({
        transform: "rotate(-3deg)",
      	textDecoration: "underline",
      	color: "rgb(240, 240, 240)"
      });

    }

  });

  //reset buttons
  $('.navButton').mouseout(function(){

      $(this).css({
        transform: "rotate(0deg)",
      	textDecoration: "none",
      	color: "rgb(230, 230, 230)"
      });

  });

  //scroll for 1st button
  $("#gallery").click(function() {

    $('html, body').animate({
        scrollTop: $(".gallery").offset().top
    }, 1000);

  });


  //scroll for 2nd button
  $("#videos").click(function() {

    $('html, body').animate({
        scrollTop: $(".videos").offset().top
    }, 1000);

  });

  //action for 3rd button
  $("#loginButton").click(function() {

    tempSrc = "img/transparent.png"
    $("#popup").find('#full').attr("src", tempSrc);

    $("#background").css({"opacity" : "0.7"});
    $("#background").fadeIn("slow");

    $("#popup").fadeIn("slow");

    $("#login").css({"opacity" : "1"});
    $("#login").fadeIn("slow");

  });

  //action for 4th button
  $("#registerButton").click(function() {

    tempSrc = "img/transparent.png"
    $("#popup").find('#full').attr("src", tempSrc);

    $("#background").css({"opacity" : "0.7"});
    $("#background").fadeIn("slow");

    $("#popup").fadeIn("slow");

    $("#register").css({"opacity" : "1"});
    $("#register").fadeIn("slow");

  });

  //action for 5th button
  $("#fightButton").click(function() {
    $('html, body').animate({
        scrollTop: $(".info").offset().top
    }, 1000);
  });

  //action for 6th button
  $("#logoutButton").click(function() {

    $.ajax({
      url: "logout.php",
      success: function(result) {
        location.reload();
      }
   });

  });

  //action for logo
  $("#logo").click(function() {
    location.reload();
  });

  //action for facebook
  $('.fa-facebook-official').mouseover(function(){
    $('#facebook_hover').css({display: "block"});
  });

  $('.fa-facebook-official').mouseout(function(){
    $('#facebook_hover').css({display: "none"});
  });

  //action fot twitter
  $('.fa-twitter-square').mouseover(function(){
    $('#twitter_hover').css({display: "block"});
  });

  $('.fa-twitter-square').mouseout(function(){
    $('#twitter_hover').css({display: "none"});
  });

});
