<?php
	class User{
		public function __construct(){
			$this->TrackUser();
		}
		
		public function TrackUser(){
			$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
			$time = date('Y-m-d H:i:s');
			$user_agent_server = $_SERVER['HTTP_USER_AGENT'];
			$current = file_get_contents($GLOBALS['__Track__USER__LOG_FILE']);
			$current .= "-- IP Address: ".$ip."\n"."-- Time: ".$time."\n"."-- User Server Agent: ".$user_agent_server."\n\n";
			file_put_contents($GLOBALS['__Track__USER__LOG_FILE'], $current);
		}
	}
?>