<?php
/**
* Blog Class
*/
class Login extends dbConnect
{

	function __construct(){
		$this->db_con = $this->connect();			
	}
	
	public function login($username, $password)
	{
		$sql = mysqli_query($this->db_con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
		$sqlRow = mysqli_num_rows($sql);
		if ($sqlRow > 0){ // Checks if good
    		while ($rows = mysqli_fetch_object($sql)){  
    		    $username = $rows->username;
    		    $password = $rows->password;
    		    #$return = "$username $password";
    		    $return = header('location: admin.php'); // Redirecting To Other Page   
    		}
		}
		else
		{

		    $return = 'Invalid entry';
		}
		return($return);
	}
}
?>