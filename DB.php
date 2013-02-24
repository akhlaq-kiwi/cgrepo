<?php
class DB{
	var $DB_HOST = 'localhost';
	var $DB_NAME = 'wwwcrick_cricketgali';
	var $DB_USER = 'wwwcrick_crick';
	var $DB_PASSWORD = 'pwd!@#$%^&';
	var $connection;
	function __construct(){
		$this->connection = mysql_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD);
		mysql_select_db($this->DB_PASSWORD);
	}
	function save($table_name, $data_array = array()){
		
	}
	function ___district(){
		print 'distruct';
		mysql_close($this->connection);
	}
}
$DB = new DB();
?>