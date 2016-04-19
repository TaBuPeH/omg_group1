<?php

	//class for database
	class database
	{
		private $config = array(
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'database'=>'finalproject',
			'encoding'=> 'utf8'
		);

		public $dbHandle = null;

		//construct function
		function __construct($config=array())
		{
			if(!empty($config))
			{
				$this->config = $config;
			}

			$this->dbHandle = mysqli_connect($this->config['host'],$this->config['user'],$this->config['pass']);
			mysqli_select_db( $this->dbHandle, $this->config['database']);

			mysqli_query($this->dbHandle, "SET NAMES '".$this->config['encoding']."'");

		}

		//return info from db
		function fetchArray($query)
		{

			$result = mysqli_query($this->dbHandle, $query);

			$info = array();
			while($row = mysqli_fetch_assoc($result))
			{
				$info[] = $row;
			}

			return $info;

		}

		//insert/udpate info
		function saveArray($table,$info)
		{
			//$table = 'products';
			if(!isset($info[0]))
			{
				$info = array(0=>$info);
			}
			foreach($info as $key=>$row)
			{
				if(isset($row['id']) && $row['id']>0)
				{
					// update
					$this->updateRow($table, $row);
				}
				else
				{
					// insert
					$this->insertRow($table, $row);
				}
			}
		}

		function updateRow($table, $row)
		{
			$query = "UPDATE `".$table."` SET ";

			$conditions = array();
			foreach($row as $dbField=>$dbValue)
			{
				$conditions[] = " `".$table."`.`".$dbField."` = '".$dbValue."'";
			}

			$query .= implode(',', $conditions);
			$query .= " WHERE `".$table."`.`id` = '".$row['id']."'";

			mysqli_query($this->dbHandle, $query);

		}

		function insertRow($table, $row)
		{
			$query = "INSERT INTO `".$table."` (";


			$query .= "`".implode('`,`', array_keys($row))."`";
			$query .= ") VALUES (";
			$query .= "'".implode("','", $row)."'";
			$query .= ")";

			mysqli_query($this->dbHandle, $query);
		}

		//delete row function
		function deleteRow($table, $where, $searchBy)
		{
			$query = "DELETE FROM `".$table."` WHERE `".$searchBy."` = '".$where."'";
			mysqli_query($this->dbHandle, $query);
		}
	}

	$db = new database();

?>
