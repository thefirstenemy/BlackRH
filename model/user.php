<?php
require_once ('');
class User(){	
	private $id;
	private $firstName;
	private $lastName;
	private $email;

	public function listUsers(){
		$query = "SELECT id, name FROM users";
		$this->connection = Connection::getConnection();
		$result = $this->connection->query($query);
		$list = $result->fetchAll(); 
		return $list;
	}

	public function insertUsers($id, $firstName, $lastName, $email){
		$query = "INSERT INTO users (id, firstName, lastName, email)";		
		$query .= " VALUES ('NULL', '".$this->firstName."', '".$this->lastName."', '".$this->email."'')";
		$this->connection = Connection::getConnection();
		$result = $this->connection->exec($query);		
	}

	public function updateUsers($id, $firstName, $lastName, $email){
		$query = "UPDATE users SET id='".$this->id."', firstName='".$this->firstName."'";
		$query .= " lastName='".$this->lastName."', email='".$this->email."'";
		$this->connection = Connection::getConnection();
		$result = $this->connection->exec($query);	
	}

	public function deteleUsers($id){
		$query = "DELETE FROM users WHERE id= '".$this->id."'";
		$this->connection = Connection::getConnection();
		$result = $this->connection->exec($query);	
	}
}

?>