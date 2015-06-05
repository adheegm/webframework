<?php
	class Init
	{
		public function __construct() {
			$this->Initialize();
		}
		
		public function Initialize(){		
			$this->database = new Database();	
			$this->cookies = new Cookies();
		}
		
		public function __destruct() {
			
		}
		
		private function Render(){
			
		}
	}	
	
	/*print $_SERVER["HTTP_HOST"];*/
	$website = new Init();
?>