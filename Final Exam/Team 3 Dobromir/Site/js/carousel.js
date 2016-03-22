//animation opacity
var opacityArray = [ "1", "0", "1", "0", "1", "0.5", "1", "0", "0.5", "0" ];
//animation timing
var timeArray = [10, 50, 40, 15, 50, 200, 100, 100, 50, 50];
//Total time of the animation
var timeSum = timeArray.reduce(function(a, b) { return a + b; }, 0);

var bgSrc = [
  "img/carousel1.jpg",
  "img/carousel2.jpg",
  "img/carousel3.jpg",
];

//current background
var bgIndex = 0;
var isAnimating = false;



$(document).ready(function(){

  //addButtons
  for(var i=0; i < bgSrc.length; i++)
  {
    if(i==0)
    $('.carouselButtons').append( "<div class='carouselButton'><img class='inactive' src='img/inactive.png' alt='inactive'></div>" );
    else
    $('.carouselButtons').append( "<div class='carouselButton'><img class='active' src='img/active.png' alt='active'></div>" );
  }

  //controlButtons
  $('.carouselButton').click(function(){

    if($(this).find("img").attr("class") == "active"){

    // using -1 is bad but whatever
    bgIndex = $(this).index() - 1 ;
    $('.carousel').click();

    }

  });

 //changeBg and Button
  $('.carousel').click(function(){
    if(!isAnimating){

      isAnimating = true;

      //this is why I have the -1
      bgIndex++;

      if(bgIndex == bgSrc.length){
        bgIndex = 0;
      }

      //change background
      $(".carouselImg").attr("src", bgSrc[bgIndex]);

      //remove inactive button
      $(".inactive").addClass('active');
      $(".inactive").attr("src", 'img/active.png');
      $(".inactive").removeClass('inactive');

      //add inactive button
      $(".active").eq(bgIndex).addClass('inactive');
      $(".inactive").attr("src", 'img/inactive.png');
      $(".inactive").removeClass('active');

      //animation
      for(var i=0; i < opacityArray.length; i++){
        $('#glitch1').animate( {opacity:opacityArray[i]} , timeArray[i], function(){});
        $('#glitch2').animate( {opacity:opacityArray[i]} , timeArray[i], function(){});
      }

      //timeout for the duration of the animation
      setTimeout(function(){
        isAnimating = false;
      }  , timeSum);

    }
  });

  //autoChange
  function showNext(){
		$('.carousel').click();
	}
	setInterval(showNext,5000);

});
