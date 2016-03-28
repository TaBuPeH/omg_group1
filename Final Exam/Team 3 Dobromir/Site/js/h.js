$(document).ready(function(){

  $('.submit').click(function(){

		var someText = $('#login_username').val();
		someText = someText.trim();

		if(someText.length > 0)
		{
			$.ajax({
				url: "ss.php",
				type: "POST",
				data: {message: someText},
        success: function(result) {

  				$('#login_notice').html(result);

  			}
			});
		}

    return false;

  });

  if($('#login_notice').html() == 'S'){
    alert(2);
    location.reload();
  }
});
