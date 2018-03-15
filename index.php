<?php 
	// Include config global
	require_once('./config/global.php');
	require_once('./core/Controller.php');
	require_once('./core/LoadController.php');

	// Si existe el controller
	if(isset($_GET["controller"])){
	    $controllerObj=loadController($_GET["controller"]);
	    tiggerAction($controllerObj);
	}else{
	    // Cargar default controller
	    $controllerObj=loadController(DEFAULT_CONTROLLER);
	    tiggerAction($controllerObj);
	}
?>
