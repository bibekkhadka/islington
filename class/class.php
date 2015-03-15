<?php 


class sqlQuery 
{
	public $username;
	public $database;
	public $host;
	public $password;
	public $dblink;

	function __construct($host, $username, $password, $database)
	{
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

		if (!$this->connect())
		{
			die ("Could not connect to database.");
		}
	}

	function connect()
	{
		$this->dblink = mysqli_connect($this->host, $this->username, $this->password);
		if (!$this->dblink)
		{
			return false;
		}
		else
		{
			mysqli_select_db($this->dblink, $this->database);

		}
			//echo "Connected to database.";
			return true;
	}

	function singleQuery($qry){
		$res = mysqli_query($this->dblink, $qry);
		$data = mysqli_fetch_array($res);
		return $data;
	}

	function num_count($qry){
		$res = mysqli_query($this->dblink, $qry);
		$num = mysqli_num_rows($res);
		return $num;
	}

	function insertData($qry){
		$res = mysqli_query($this->dblink, $qry);
	}




}
// 	function singleQuery($qry)
// 	{
// 		$res = mysqli_query($this->dblink, $qry);
// 		$data = mysqli_fetch_array($res);
// 		return $data;
// 	}

// 	function num_count($qry)
// 	{
// 		$res = mysqli_query($this->dblink, $qry);
// 		$num = mysqli_num_rows($res);
// 		return $num;
// 	} 

// 	function insertData($qry)
// 	{

// 		$res = mysqli_query($this->dblink, $qry);
// 	}

// 	function viewData($qry)
// 	{
// 		$res = mysqli_query($this->dblink, $qry);
// 	}

// 	function loopselect($qry)
// 	{
// 		$row = array();
// 		$i=0;
// 		$res = mysqli_query($this->dblink, $qry);
// 		while($data = mysqli_fetch_array($res))
// 		{

// 			$row[$i] = $data;
// 			$i++;

// 		}
// 		return $row;

// 	}

// 	function deleteData($qry)
// 	{
// 		$res = mysqli_query($this->dblink, $qry);
// 	}

	

// 	function updateData($qry)
// 	{
// 		$res = mysqli_query($this->dblink, $qry);
// 		$data = mysqli_fetch_array($res);
// 	}
// }



 ?>