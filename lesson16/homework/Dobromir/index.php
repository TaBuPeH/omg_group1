<?php

mysql_connect('localhost','root','');
mysql_select_db('homework');
mysql_query("SET NAMES 'utf8'");


$q = "SELECT `products`.*,`shop_products`.`quantity`,`shops`.`id` AS `shop_id`, `shops`.`town`, `shops`.`street`  FROM `products`
INNER JOIN `shop_products` ON (`products`.`id` = `shop_products`.`product_id`)
INNER JOIN `shops` ON (`shops`.`id` = `shop_products`.`shop_id`)";

$result = mysql_query($q);

echo "<pre>";

$info = array();

while($row = mysql_fetch_assoc($result))
{
	$info[] = $row;
}

print_r($info);

?>
