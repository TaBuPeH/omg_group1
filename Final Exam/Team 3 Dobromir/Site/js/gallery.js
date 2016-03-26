$(document).ready(function(){

  $('.galleryImg').mouseenter(function() {

    var tempSrc = $(this).find('img').attr("src");
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") + 1);
    tempSrc = tempSrc + 'active.jpg';
    $(this).find('img').attr("src", tempSrc);

  });

  $('.galleryImg').mouseleave(function() {

    var tempSrc = $(this).find('img').attr("src");
    tempSrc = tempSrc.slice(0, tempSrc.lastIndexOf("_") + 1);
    tempSrc = tempSrc + 'inactive.jpg';
    $(this).find('img').attr("src", tempSrc);

  });

});
