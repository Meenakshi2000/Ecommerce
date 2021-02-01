<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "store_db");
		$this->con =mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
		return $this->con;


	}
}

?>