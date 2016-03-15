<?php
session_start();
if(!isset($_SESSION['logged_user']))
{
	header("Location: login.php");
}

?>
<html>
		<head>
			
			<script src="http://code.jquery.com/jquery-1.12.1.min.js"> </script>
			<script src="main.js"></script>
			<link href="main.css" rel="stylesheet"/>
		</head>
		
		
		<body>
			
			<div id="messages">
			</div>
			
			<form>
				<input type="text" id="myMessage" > <input type="submit" value="Send Message" id="send"> 
			</form>
		</body>
</html>