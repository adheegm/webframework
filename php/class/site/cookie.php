<?php
	class Cookies{
		public $trail_users = "trail_users";
		public function __construct(){			
			if(!isset($_COOKIE[$this->trail_users])){
				setcookie($this->trail_users, Create_GUID(), time() + (86400 * 30), "/");			
				$_COOKIE[$this->trail_users] = Create_GUID();	
				$users = new User();
			}
		}
	}	
?>