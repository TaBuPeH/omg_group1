<?php

// database Handle
mysql_connect('localhost','root','');
mysql_select_db('group1');

mysql_query("SET NAMES 'utf8'");

//$q = "SELECT * FROM `products` WHERE id%2=0 and id>3";

//$q = "INSERT INTO `products` (`name`,`price`) VALUES ('test','3'),('test2','4')";
//$q = "UPDATE `products` SET `price`=30 WHERE `name` = 'Домати' ";
//$q = "UPDATE `products` SET `price`=10 WHERE `id` = '3' ";
//$q = "UPDATE `products` SET `price`=40 WHERE `name` LIKE '%дом%'";

//$q = "DELETE FROM `products` WHERE `name` LIKE 'test%' ";


$q = "SELECT * FROM `products` INNER JOIN `shop_products` ON (`products`.`id` = `shop_products`.`product_id`) INNER JOIN `shops` ON (`shops`.`id` = `shop_products`.`shop_id`)";
/*
$q = "SELECT `products`.*,`shop_products`.`quantity`,`shops`.`id` AS `shop_id`, `shops`.`city`, `shops`.`address`  FROM `products` 
INNER JOIN `shop_products` ON (`products`.`id` = `shop_products`.`product_id`)
INNER JOIN `shops` ON (`shops`.`id` = `shop_products`.`shop_id`)";
 * 
 * 
 */
 
 
$result = mysql_query($q);

echo "<pre>";
/*
$q ='select * from products';
$result = mysql_query($q);
*/
$info = array();
while(   $row = mysql_fetch_assoc($result)    )
{
	$info[] = $row;
}

print_r($info);
