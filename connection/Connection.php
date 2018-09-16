<?php
require_once('config.php');
class Connection{
	public static function getConnection(){
		$conn = new PDO(DB_DRIVE.':host='.DB_HOSTNAME.';
			dbname='.DB_DATABASE, DB_USERNAME,DB_PASSWORD);
		return $conn;
	}
}
?>