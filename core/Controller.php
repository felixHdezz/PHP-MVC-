<?php 
	class Controller
	{
		public function __construct()
		{
			require_once 'Connection.php';
	        foreach(glob("model/*.php") as $file){
	            require_once $file;
	        }
		}

		public function view(){
			require_once 'core/HelpersViews.php';
	        $helper=new HelpersViews();
	        require_once 'view/'.DEFAULT_ACTION.'.php';
		}

		public function _view($view, $data){
			foreach ($data as $id_assoc => $value) {
	            ${$id_assoc}=$value; 
	        }
	        require_once 'core/HelpersViews.php';
	        $helper=new HelpersViews();
	    
	        require_once 'view/'.$view.'.php';
		}

		public function redirect($controller=DEFAULT_CONTROLLER,$action=DEFAULT_ACTION){
			header("Location:index.php?controller=".$controller."&action=".$action);
		}
	}
?>