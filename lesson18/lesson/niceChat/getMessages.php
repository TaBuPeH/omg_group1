<?php

require_once("db.class.php");

$query = "SELECT * FROM `messages` INNER JOIN `users` ON(`messages`.`user_id` = `users`.`id`) ORDER BY `ondate` ASC";

$messages = $db->fetchArray($query);

foreach($messages as $k=>$v)
{
	?>
		<div class='messageLine'>
			<span class='timestamp'><?php echo $v['ondate']?></span>
			<span class='sender'><?php echo $v['first_name']." ".$v['last_name'] ?></span> 
			<span class='message'><?php echo $v['message']?> </span>
		</div>
	<?php
}
