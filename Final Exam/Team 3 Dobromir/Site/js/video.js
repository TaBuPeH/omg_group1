//video urls
var url = ["https://www.youtube.com/embed/_3kZSOKmtss", "https://www.youtube.com/embed/b9TbECg0XhE"];

//flag for open window
isOpen = false;

//flag for animation
isAnimating = false;

//curent element urlIndex
var urlIndex = -1;

$(document).ready(function(){

  $(".videoImg").click(function(){

    if(isOpen){
      if(!isAnimating){

        isAnimating = true;

        //close the window
        $("iframe").animate( {height: 0} , 1000, function(){
          $("iframe").css({border: "none"});
          $("iframe").attr("src", '');
          isOpen = false;
          isAnimating = false;
        });

        //simulate a second click so that the video can open
        var temp = $(this).index() - 1;
        if(urlIndex != temp)
        {
          //timeout for the closing animation + 100ms
          setTimeout( function(){
            $(".videoImg").eq(temp).click();
          }, 1100 );
        }

      }
    }

  });

  $(".videoImg").click(function(){

    if(!isOpen){
      if(!isAnimating){

        isAnimating = true;

        //open a window with clicked video
        urlIndex = $(this).index() - 1;
        $("iframe").css({display: "block"});
        $("iframe").css({border: "0.3vw solid black"});
        $("iframe").attr("src", url[urlIndex]);
        $("iframe").animate( {height: "23vw"} , 1000, function(){isOpen = true; isAnimating = false});

      }
    }

  });

});
