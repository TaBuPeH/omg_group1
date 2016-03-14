<?php


class database
{
	private $config = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'database'=>'homework',
		'encoding'=> 'utf8'
	);

	private $dbHandle = null;

	function __construct($config=array())
	{
		if(!empty($config))
		{
			$this->config = $config;
		}


		$this->dbHandle = mysql_connect($this->config['host'],$this->config['user'],$this->config['pass']);
		mysql_select_db($this->config['database'],$this->dbHandle);

		mysql_query("SET NAMES '".$this->config['encoding']."'",$this->dbHandle);

	}


	function fetchArray($query)
	{
		$result = mysql_query($query);
		$info = array();

		while($row = mysql_fetch_assoc($result))
		{
			$info[] = $row;
		}

		return $info;
	}


	function saveArray($table,$info)
	{
		//$table = 'producs';
		// info = /....
		echo sizeof($info)."<br><br>";
		echo "<pre>";
		print_r($info);

		foreach($info as $key=>$row)
		{

			if(isset($row['id']) && $row['id']>0)
			{
				// do update
				$this->updateRow($table, $row);
			}
			else
			{
				// do insert
				$this->insertRow($table, $row);
			}
		}
	}


	function updateRow($table,$row)
	{


		$query = "UPDATE `".$table."` SET ";

		foreach($row as $dbField=>$dbValue)
		{
			if($dbField !='id')
			{
				$query = $query. " `".$dbField."` = '".$dbValue."', ";
			}
		}

		$query = substr($query,0, strlen($query) - 2);
		$query = $query . " WHERE id = '".$row['id']."'";

		mysql_query($query,$this->dbHandle);
	}

	function insertRow($table,$row)
	{
		$x = "VALUES ('".implode("','",$row)."')";
		$y = "(`".implode("`,`",array_keys($row))."`)";
		$query = "INSERT INTO " . $table . $y . " " . $x;


		mysql_query($query,$this->dbHandle);

	}

	function deleteRow($table, $id)
	{
 		$query = "DELETE FROM " . $table . " WHERE id = " . $id;
		mysql_query($query,$this->dbHandle);
	}
}


$info[0]['id'] = 4;
$info[0]['brand'] = 'kote';
$info[0]['price'] = 22;


$info[1]['id'] = 0;
$info[1]['brand'] = 'kote';
$info[1]['price'] = 22;

$info[2]['brand'] = 'kote5';
$info[2]['price'] = 223;

$db = new database();

$db->saveArray('products', $info);
$db->deleteRow('products', 5);
