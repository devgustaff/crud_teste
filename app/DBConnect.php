<?php

class DBConnect
{
	protected $conn = null;

	public function __construct()
	{
		try {
      		global $config;

     		$this->conn = new PDO(
     			"mysql:dbname=" . $config["dbname"] . 
     			";host=" . $config["dbhost"], $config["dbuser"], $config["dbpass"]
      		);
      		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	} catch(PDOException $e) {
      		die("Erro: " . $e->getMessage());
      	}

	}
}