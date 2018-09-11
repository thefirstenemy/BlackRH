<?php
class Connection{
	public static function getConnection(){
		$conn = new PDO('mysql:host=127.0.0.1;dbname=blackrh', 'root','')
		return $conn;
	}
}
?>