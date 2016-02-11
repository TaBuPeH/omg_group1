$(document).ready(function(){

	$('.gallery img').each(function(){

		var newCircle = '<div class="circle"></div>';
		$('.circles').append(newCircle);
	});


	var isAnimating = false;

	$('.gallery img').click(function(){

		if(isAnimating === false)
		{
			isAnimating = true;

			$(this).animate( {left:"-100%"}, 1000, function(){

				$(this).css( {left:"100%", display: "none"} );

				isAnimating = false;
			});

			var elementToAnimate = $(this).next();

			if(elementToAnimate.length == 0)
			{
				elementToAnimate = $('.gallery img:first-of-type');
			}

			elementToAnimate.css( {display: "block"} );

			elementToAnimate.animate( {left: "0%"}, 1000 );
		}
	});





// on click on any circle
    $('.circle').click(function(){
       
        // if the site is not currently animating
        if(isAnimating == false)
        {
            if ( $('.gallery img:visible').index()  >   $(this).index() )
            {
             
              $('.gallery img:visible').animate( {left: "100%"} , 1000, function(){
                    // move the element to the right of others
                    $(this).css( { display:"none"} );
                    // set animation is done
                    isAnimating = false;
                   
                } );
               
               // 	var currentNumber = $(this).next;
  
               //   var nextImage = $('.gallery img').eq(currentNumber);
               //   // set the image to be visible
               //   nextImage.css('display','block');
               //   //nextImage.css('right','0');     
               //   // animate the image to the proper place
               //   nextImage.animate({right:"0%"}, 1000);




              	// get the currently clicked element - its index
                var currentNumber = $(this).index();
                // get the image corresponding to this index
                var nextImage = $('.gallery img').eq(currentNumber);
                // set the image to be visible
                nextImage.css('display',"block");
                nextImage.css('left','-100%');

                // animate the image to the proper place
                nextImage.animate({left:"0%"}, 1000);
               
            }
             
             
            if( $('.gallery img:visible').index()  !=  $(this).index())
            {
                // tell the site we are animating
                isAnimating = true;
                // move the visible element off the screen
                $('.gallery img:visible').animate( {left:"-100%"} , 1000, function(){
                    // move the element to the right of others
                    $(this).css( {left: "100%", display:"none"} );
                    // set animation is done
                    isAnimating = false;
                   
                } );
               
                // get the currently clicked element - its index
                var currentNumber = $(this).index();
                // get the image corresponding to this index
                var nextImage = $('.gallery img').eq(currentNumber);
                // set the image to be visible
                nextImage.css('display',"block");
                // animate the image to the proper place
                nextImage.animate({left:"0%"}, 1000);
            }
            
            


        }
       
       
    });
	




	
	
       
       
  




});