<?php 
	//include config global
	require_once('./config/global.php');
	require_once('./core/Controller.php');
	require_once('./core/LoadController.php');

	if(isset($_GET["controller"])){
	    $controllerObj=loadController($_GET["controller"]);
	    tiggerAction($controllerObj);
	}else{
	    $controllerObj=loadController(DEFAULT_CONTROLLER);
	    tiggerAction($controllerObj);
	}
?>