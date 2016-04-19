<?php
/**
* Database connect
*/
class dbConnect
{

	public $db_con;

	function __construct()
	{
		$this->db_con;
	}

	public function connect() 
	{

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$db_name = "Timesheet";

		$connection = mysqli_connect($servername,$username, $password, $db_name);
		// Check db connection
		/*
			if ($connection){
			    echo 'Connected to the DB';
			}
			else
			{
			    echo 'Error has occured';
			}
		*/
		$this->db_con = $connection;	

		return $this->db_con;    		
	}
}

$dbClass = new dbConnect();
$test =  $dbClass->connect();
?>