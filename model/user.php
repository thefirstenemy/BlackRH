<?php
class User(){
	private $connection;

	function __construct($connection){
		$this->connection = $connection;
	}

	public function listUsers(){
		$query = "SELECT id, name FROM users";
		$result = $this->connection->query($query);
		$list = $result->fetchAll(); 
		return $list;
	}

	public function insertUsers($id, $firstName, $lastName, $email){
		$query = "INSERT INTO users (id, firstName, lastName, email)";
		$query .= " VALUES ('NULL', '".$firstName."', '".$lastName."', '".$email."'')";
		$result = $this->connection->exec($query);		
	}

	public function updateUsers($id, $firstName, $lastName, $email){
		$query = "UPDATE users SET id='".$id."', firstName='".$firstName."'";
		$query .= " lastName='".$lastName."', email='".$email."'";
		$result = $this->connection->exec($query);	
	}

	public function deteleUsers($id){
		$query = "DELETE FROM users WHERE id= '".$id."'";
		$result = $this->connection->exec($query);	
	}
}

?>