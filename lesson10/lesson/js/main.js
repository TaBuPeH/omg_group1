$(document).ready( function(){
	
	
	var clickedElement;
	var prevImg,nextImg;
	var imgArray = new Array();
	
	
	
	
	// we click on an image
	$('.gallery img').click(function(){
		
		// we try go get the next image
		nextImg = $(this).next();
		// if the element is number 4 - we have no next image
		if(nextImg.length == 0)
		{
			// so we fill it with the first one
			nextImg = $('.gallery img:first-of-type');
		}	
		// get the previous image
		prevImg = $(this).prev();
		// if the element is number 1 - we have no previous image
		if(prevImg.length == 0)
		{
			// so we give it the last one
			prevImg = $('.gallery img:last-of-type');
		}	
		
		
		// if next image has class active or the previous image has class active - 
		// only then execute the move
		if(nextImg.hasClass('active') || prevImg.hasClass('active'))
		{
			// if the previous image has the class active
			if(prevImg.hasClass('active'))
			{	
				// move the elements from right to left
				moveFromRight($(this));
			}
			else
			{
				// else move them from left to right
				moveFromLeft($(this));
			}
		}
		
		
		
	});
	
	
	function moveFromRight(currentElement)
	{
		
		imgArray[0] = currentElement; // clicked element - this is the small image on the left/right
		imgArray[1] = nextImg;  // next element
	
		var x = nextImg.next();
		if(x.length == 0)
		{
			x = $('.gallery img:first-of-type');
		}
		imgArray[2] = x;
		imgArray[3] = $(".active"); // currently shown BIG image
		
		
		
		imgArray[0].animate({width: "50%", left: "25%", top:"40%"}, 500);
		imgArray[1].animate({width: "35%", left: "60%", top:"30%"}, 500);
		imgArray[2].animate({width: "30%", left: "35%", top:"10%"}, 500);
		imgArray[3].animate({width: "35%", left: "5%", top:"30%"}, 500, function(){
			
			imgArray[3].removeClass('active');
			imgArray[0].addClass('active');
		});
		
		setTimeout(function(){ 
		
			imgArray[0].css('z-index',1000);
			imgArray[1].css('z-index',900);
			imgArray[2].css('z-index',800);
			imgArray[3].css('z-index',900);
		} ,250);
	}
	
	
	function moveFromLeft(currentElement)
	{
		imgArray[0] = currentElement;
		imgArray[1] = prevImg;
		var x = prevImg.prev();
		if(x.length == 0)
		{
			x = $('.gallery img:last-of-type');
		}
		imgArray[2] = x;
		imgArray[3] = $(".active");
		
		
		
		imgArray[0].animate({width: "50%", left: "25%", top:"40%"}, 500);
		imgArray[1].animate({width: "35%", left: "5%", top:"30%"}, 500);
		imgArray[2].animate({width: "30%", left: "35%", top:"10%"}, 500);
		imgArray[3].animate({width: "35%", left: "60%", top:"30%"}, 500, function(){
			
			imgArray[3].removeClass('active');
			imgArray[0].addClass('active');
		});
		
		setTimeout(function(){ 
		
			imgArray[0].css('z-index',1000);
			imgArray[1].css('z-index',900);
			imgArray[2].css('z-index',800);
			imgArray[3].css('z-index',900);
		} ,250);
	}
	
} );