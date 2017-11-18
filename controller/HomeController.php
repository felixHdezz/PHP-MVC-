<?php 
	class HomeController extends Controller
	{
		public $connection = null;
		public $adapter = null;
		function __construct() {
			parent::__construct();
	        $this->connection = new Connection();
	        $this->adapter = $this->connection->dbConnection();
		}

		public function Index(){
			$this->view();
		}
	}
?>