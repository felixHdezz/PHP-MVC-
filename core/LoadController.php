<?php
	function loadController($controller){
		$CONTROLLER = ucwords($controller).'Controller';
		$URL_CONTROLLER = 'controller/'.($CONTROLLER).'.php';
		if (!is_file($URL_CONTROLLER)) {
			$URL_CONTROLLER = 'controller/'.ucwords(DEFAULT_CONTROLLER).'controller.php';
		}
		require_once $URL_CONTROLLER;
		$controllerObj = new $CONTROLLER;
		return $controllerObj;
	}
	
	function laodAction($controller, $action){
		$newAction = $action;
    	$controller->$newAction();
	}

	function tiggerAction($controllerObj){
		if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
	        laodAction($controllerObj, $_GET["action"]);
	    }else{
	        laodAction($controllerObj, DEFAULT_ACTION);
	    }
	}
?>