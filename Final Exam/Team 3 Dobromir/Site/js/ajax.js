$(document).ready(function(){

  //action for login submit
  $('#login_submit').click(function(){

			$.ajax({

				url: "login.php",
				type: "POST",
				data: {username: $('#login_username').val(),
               password: $('#login_password').val()},

        success: function(result) {

  				$('#login_notice').html(result);

          if($('#login_notice').html() == ''){
            location.reload();
          }

  			}

			});
    return false;
  });



  //action for register submit
  $('#register_submit').click(function(){

			$.ajax({

				url: "register.php",
				type: "POST",
				data: {username: $('#register_username').val(),
               password: $('#register_password').val(),
               email: $('#register_email').val()},

        success: function(result) {

  				$('#register_notice').html(result);

          if($('#register_notice').html() == ''){
            location.reload();
          }

  			}

			});
    return false;
  });


  //action for rest button
  $('#rest').click(function(){

      $.ajax({

        url: "rest.php",

        success: function(result) {

            alert(result);
            location.reload();
          }

			});
    return false;
  });


  //action for train button
  $('#train').click(function(){

      $.ajax({

        url: "train.php",

        success: function(result) {

            alert(result);
            location.reload();

          }

			});

    return false;
  });

  //action for fight button
  $('#fight').click(function(){

      $.ajax({

        url: "fight.php",

        success: function(result) {

            alert(result);
            location.reload();
          }

			});
    return false;
  });


});
