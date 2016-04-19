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
    $("#popup").find('#full').attr("src", tempSrc);

    $("#background").css({"opacity" : "0.7"});
		$("#background").fadeIn("slow");

		$("#popup").fadeIn("slow");
    $("#left_arrow").fadeIn("slow");
    $("#right_arrow").fadeIn("slow");
    // for removing the scrollbar and locking the page in place
		//$("body").css({"overflow": "hidden"});

  });

  //fade in the left arrow
  $('#left_arrow').mouseenter(function() {
    $("#left_arrow").find('img').fadeIn("fast");
  });

  //fade out the left arrow
  $('#left_arrow').mouseleave(function() {
    $("#left_arrow").find('img').fadeOut("fast");
  });

  //left arrow click
  $('#left_arrow').click(function() {

    var tempSrc = $('#full').attr("src");
    tempIndex = tempSrc.slice(tempSrc.lastIndexOf("_") - 2, tempSrc.lastIndexOf("_"));
    tempIndex --;
    if(tempIndex < 10)
    {
      tempIndex = '0' + tempIndex;
    }
    if(tempIndex == 0)
    {
      tempIndex = '20';
    }
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") - 2);
    tempSrc = tempSrc + tempIndex + '_full.jpg';
    $("#popup").find('#full').attr("src", tempSrc);

  });

  //fade in the right arrow
  $('#right_arrow').mouseenter(function() {
    $("#right_arrow").find('img').fadeIn("fast");
  });

  //fade out the right arrow
  $('#right_arrow').mouseleave(function() {
    $("#right_arrow").find('img').fadeOut("fast");
  });

  //right arrow click
  $('#right_arrow').click(function() {

    var tempSrc = $('#full').attr("src");
    tempIndex = tempSrc.slice(tempSrc.lastIndexOf("_") - 2, tempSrc.lastIndexOf("_"));
    tempIndex ++;
    if(tempIndex < 10)
    {
      tempIndex = '0' + tempIndex;
    }
    if(tempIndex > 20)
    {
      tempIndex = '01';
    }
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") - 2);
    tempSrc = tempSrc + tempIndex + '_full.jpg';
    $("#popup").find('#full').attr("src", tempSrc);

  });


  //hide img and background
  $("#background").click(function(){

    $("#background").fadeOut("slow");
    $("#popup").fadeOut("slow");
    $("#left_arrow").fadeOut("slow");
    $("#right_arrow").fadeOut("slow");
    $("#login").fadeOut("slow");
    $("#register").fadeOut("slow");
    $("#login_username").val("");
    $("#login_password").val("");
    $("#register_username").val("");
    $("#register_password").val("");
    $("#register_email").val("");
    $('#login_notice').html("");
    $('#register_notice').html("");
    //for adding the scrollbar back again
    //$("body").css({"overflow": "auto"});

  });

});
