$(document).ready(function(){
	
	
	$('.gallery img').each(function(){
		
		var ourNewCircle = 	'<div class="circle"></div>';
		$('.circles').append(ourNewCircle);
		
	});
	
	
	var isAnimating = false;
	
	$('.gallery img').click(function(){
		
		if(isAnimating == false)
		{
			isAnimating = true;
			
			$(this).animate( {top:"-100%"} , 1000, function(){ 
				
				$(this).css( {top: "100%", display:"none",opacity:'0'} );
				
				isAnimating = false;
				
			} );
			
			var elementToAnimate = $(this).next();
			
			if(elementToAnimate.length == 0)
			{
				elementToAnimate = $('.gallery img:first-of-type');
			}
			
			elementToAnimate.css({display: "block"});
			
			elementToAnimate.animate({top:"0%",opacity:'1'}, 1000);
		}
		
		
	});
	
	
	

	
	
	setInterval(showNext,4000);





	


});




function showNext()
{
	$('.gallery img:visible').click();
}



$(document).ready(function(){
    $(document).scroll(function(){
        $(".block_1").fadeIn(1000);
        $(".block_2").fadeIn(2000);
        $(".block_3").fadeIn(3000);
        $(".block_4").fadeIn(4000);
        $(".block_5").fadeIn(5000);
    });
});











