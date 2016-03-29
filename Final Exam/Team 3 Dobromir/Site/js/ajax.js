$(document).ready(function(){

  $('#login_submit').click(function(){

		var myUsername = $('#login_username').val();
		myUsername = myUsername.trim();
    var myPassword = $('#login_password').val();
		myPassword = myPassword.trim();

			$.ajax({

				url: "ss.php",
				type: "POST",
				data: {username: myUsername,
               password: myPassword},

        success: function(result) {

  				$('#login_notice').html(result);

          if($('#login_notice').html() == ''){
            location.reload();
            //alert(2);
          }

  			}

			});
    return false;
  });


  $('#register_submit').click(function(){

		var myUsername = $('#register_username').val();
		myUsername = myUsername.trim();
    var myPassword = $('#register_password').val();
		myPassword = myPassword.trim();
    var myEmail = $('#register_email').val();
    myEmail = myEmail.trim();

			$.ajax({

				url: "ss.php",
				type: "POST",
				data: {username: myUsername,
               password: myPassword,
               email: myEmail,},

        success: function(result) {

  				$('#register_notice').html(result);

          if($('#register_notice').html() == ''){
            //location.reload();
            alert(2);
          }

  			}

			});
    return false;
  });


});
