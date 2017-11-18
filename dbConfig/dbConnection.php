<?php
	class dbConnection
	{
		public $CONNECTION;
		public $_SERVER_NAME = "localhost";
		public $_DATABASE = "chats";
		public $_USER_NAME = "root";
		public $_PASSWORD = "";

		public function dbConnection() {
			try{
				if (!isset($this->CONNECTION)) {
					$this->CONNECTION =mysql_connect($this->_SERVER_NAME,$this->_USER_NAME,$this->_PASSWORD) or die(mysql_error());
					mysql_select_db($this->_DATABASE,$this->CONNECTION) or die(mysql_error());
				}
			}catch(Exception $e){
				throw new Exception("Error Processing Request", 1);
			}
		}

		public function query($sql){
			$dbResult = mysql_query($sql, $this->CONNECTION) or die(mysql_error());
			return $dbResult;
		}
	}
?>