<?php


require_once('db.class.php');


$q = "SELECT `products`.*,`shop_products`.`quantity`,`shops`.`id` AS `shop_id`, `shops`.`town`, `shops`.`street`  FROM `products`
INNER JOIN `shop_products` ON (`products`.`id` = `shop_products`.`product_id`)
INNER JOIN `shops` ON (`shops`.`id` = `shop_products`.`shop_id`)";

$result = $db->fetchArray($q);

$q = "SELECT * FROM `products`";

$result2 = $db->fetchArray($q);



?>
