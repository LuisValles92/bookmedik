<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b0b6c71c06efc4";$this->pass="9e587e4d";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_6d3f2c1dc835e21";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
