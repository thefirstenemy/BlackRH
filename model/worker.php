<?php
class Worker extends User{
    private $id;
	private $firstName;
	private $lastName;
	private $email;

	function __construct($id, $firstName, $lastName, $email){
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getEmail(){
		return $this->$email;
	}

	public function setEmail($email){
		$this->email = $email;
    }	
    
    public function listUser(){
		$query = "SELECT id, name FROM users";
		$connection = Connection::getConnection();
		$result = $this->connection->query(query);
		$list = $result->fetchAll(); 
		return $list;
	}

	public function insertWorker($name, $email){
        try{
            $this->firstName = $name;            
            $this->$email = $email;
            $query = "INSERT INTO users (id, firstName, email)";		
            $query .= " VALUES ('NULL', '".$this->firstName."', '".$this->email."'')";
            $connection = Connection::getConnection();
            $connection->exec($query);
        }catch (Exception $e) {
            echo 'Exception error: ',  $e->getMessage(), "\n";
        }		
	}

	public function updateUser(){
		$query = "UPDATE users SET id='".$this->id."', firstName='".$this->firstName."'";
		$query .= " lastName='".$this->lastName."', email='".$this->email."'";
		$connection = Connection::getConnection();
		$connection->exec($query);	
	}

	public function deleteWorker(){
		$query = "DELETE FROM users WHERE id= '".$this->id."'";
		$connection = Connection::getConnection();
		$connection->exec($query);	
	}
}
?>