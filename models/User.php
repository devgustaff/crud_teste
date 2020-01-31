<?php

class User extends DBConnect
{
	private $name;
	private $email;
	private $phone;
	private $date;  // data nascimento
	private $address;

	public function save()
	{
		if ( $this->email_exists($this->getEmail()) == false) {
			$sql = "INSERT INTO users (name, email, phone, date_birth, address) 
					VALUES (:name, :email, :phone, :date_birth, :address)";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":name", $this->getName(), PDO::PARAM_STR);
			$stmt->bindValue(":email", $this->getEmail(), PDO::PARAM_STR);
			$stmt->bindValue(":phone", $this->getPhone(), PDO::PARAM_STR);
			$stmt->bindValue(":date_birth", $this->getDate(), PDO::PARAM_STR);
			$stmt->bindValue(":address", $this->getAddress(), PDO::PARAM_STR);
			$stmt->execute();

			return true;
		} else {
			return false;
		}
	}

	public function email_exists() 
	{
		$sql = "SELECT * FROM users WHERE email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindValue(":email", $this->getEmail(), PDO::PARAM_STR);
		$stmt->execute();

		if ( $stmt->rowCount() > 0 ) {
			return true;
		} else {
			return false;
		}
	}

	public function getUsers() 
	{
		$sql = "SELECT * FROM users";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();

		$rows = array();

		if ( $stmt->rowCount() > 0 ) {
			$rows = $stmt->fetchAll();
		}

		return $rows;
	}

	// métodos set
	public function setName($name)
	{
		$this->name = $name;
	}

	public function setEmail($email)
	{
		$this->email = $email;	
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

	// método get
	public function getName() 
	{
		return $this->name;
	}

	public function getEmail() 
	{
		return $this->email;
	}

	public function getPhone() 
	{
		return $this->phone;
	}

	public function getDate() 
	{
		return $this->date;
	}

	public function getAddress() 
	{
		return $this->address;
	}
}