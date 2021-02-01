<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		// $this->con = new Mysqli("localhost", "root", "", "heroku_71dd34b7c3484d6");
		$this->con =mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
		return $this->con;


	}
}

?>