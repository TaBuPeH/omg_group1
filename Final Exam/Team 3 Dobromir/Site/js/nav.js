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
  $("#placeholder1").click(function() {

    $('html, body').animate({
        scrollTop: $(".mainContainer").offset().top
    }, 1000);

  });


  //scroll for 2nd button
  $("#placeholder2").click(function() {

    $('html, body').animate({
        scrollTop: $(".mainContainer").offset().top
    }, 1000);

  });


  //scroll for 3rd button
  $("#placeholder3").click(function() {

    $('html, body').animate({
        scrollTop: $(".mainContainer").offset().top
    }, 1000);

  });

  //scroll for 4th button
  $("#placeholder4").click(function() {

    $('html, body').animate({
        scrollTop: $(".mainContainer").offset().top
    }, 1000);

  });

});
