<?php 
	class Connection
	{
		public $DRIVER   = "";
		public $HOST     = "";
		public $USER     = "";
		public $PASSWORD = "";
		public $DATABASE = "";
		public $CHARSET  = ""; 

		public function __construct() {
			$dbConfig = include_once('config/database.php');
			$this->DRIVER   = $dbConfig['driver'];
			$this->HOST     = $dbConfig['host'];
			$this->USER     = $dbConfig['user'];
			$this->PASSWORD = $dbConfig['password'];
			$this->DATABASE = $dbConfig['database'];
			$this->CHARSET  = $dbConfig['charset'];
		}

		public function dbConnection(){
			if (isset($this->DRIVER) || $this->DRIVER == "mysql" && $this->DRIVER != null) {
				$con = mysqli_connect($this->HOST, $this->USER, $this->PASSWORD, $this->DATABASE);
				// Check connection
				if (mysqli_connect_errno()){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
            		$con->query("SET NAMES '".$this->CHARSET."'");
			}
			return $con;
		}
	}
?>
