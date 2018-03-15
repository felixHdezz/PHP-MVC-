<?php 
	class HomeController extends Controller
	{
		public $connection = null;
		public $adapter = null;
		// Inicializa la conexión a la DB
		function __construct() {
			parent::__construct();
	        	$this->connection = new Connection();
	        	$this->adapter = $this->connection->dbConnection();
		}
		
		// Función para mostrar las vistas
		public function Index(){
			$this->view();
		}
	}
?>
