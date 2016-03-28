$(document).ready(function(){

  //color the tumbnail
  $('.galleryImg').mouseenter(function() {

    var tempSrc = $(this).find('img').attr("src");
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") + 1);
    tempSrc = tempSrc + 'active.jpg';
    $(this).find('img').attr("src", tempSrc);

  });

  //return tumbnail to normal
  $('.galleryImg').mouseleave(function() {

    var tempSrc = $(this).find('img').attr("src");
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") + 1);
    tempSrc = tempSrc + 'inactive.jpg';
    $(this).find('img').attr("src", tempSrc);

  });

  //Show background and popup the full img
  $('.galleryImg').click(function() {

    var tempSrc = $(this).find('img').attr("src");
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") + 1);
    tempSrc = tempSrc + 'full.jpg';
    $("#popup").find('img').attr("src", tempSrc);

    $("#background").css({"opacity" : "0.7"});
		$("#background").fadeIn("slow");

		$("#popup").fadeIn("slow");

    // for removing the scrollbar and locking the page in place
		//$("body").css({"overflow": "hidden"});

  });

  //hide img and background
  $("#background").click(function(){

    $("#background").fadeOut("slow");
    $("#popup").fadeOut("slow");
    $("#login").fadeOut("slow");
    $("#register").fadeOut("slow");
    //for adding the scrollbar bakc again
    //$("body").css({"overflow": "auto"});

  });

});
