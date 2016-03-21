$(document).ready(function(){
	
	
	$('form').submit(function(event){
		
		event.preventDefault();
		
		var someText = $('#myMessage').val();
		someText = someText.trim();
		
		if(someText.length > 0)
		{
			$.ajax({
				url: "sendMessage.php",
				type: "POST",
				data: {message: someText},
				success: function(result) {
					
					getAllMessages();
					
				}
			});
		}
		$('#myMessage').val("");
	});
	
	
});


function getAllMessages()
{
	
	$.ajax({
		url: "getMessages.php",
		type: "GET",
		success: function(res2) {
			
			$("#messages").html(res2);
			$('#messages').scrollTop(100000);
			
		}
	});
	
}

setInterval(getAllMessages,1000);