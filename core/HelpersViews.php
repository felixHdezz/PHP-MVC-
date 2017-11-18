<?php
	class HelpersViews{
		public function url($controller=DEFAULT_CONTROLLER,$action=DEFAULT_ACTION){
	        $urlString="index.php?controller=".$controlador."&action=".$accion;
	        return $urlString;
	    }
	}
?>