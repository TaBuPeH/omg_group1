$(document).ready(function(){

  $('.navButton').mouseover(function(){

    //hard coding is bad but I am lazy and its 3 because of the logo
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
    $("#popup").find('img').attr("src", tempSrc);

    $("#background").css({"opacity" : "0.7"});
    $("#background").fadeIn("slow");

    $("#popup").fadeIn("slow");

    $("#login").css({"opacity" : "1"});
    $("#login").fadeIn("slow");

  });

  //action for 4th button
  $("#registerButton").click(function() {

    tempSrc = "img/transparent.png"
    $("#popup").find('img').attr("src", tempSrc);

    $("#background").css({"opacity" : "0.7"});
    $("#background").fadeIn("slow");

    $("#popup").fadeIn("slow");

    $("#register").css({"opacity" : "1"});
    $("#register").fadeIn("slow");

  });


});
