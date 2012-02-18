<?php
	class globals{
		public $config = array();
		public $sock;
		public function _init(){
			$this->config = parse_ini_file("./config.ini");
		}
	}
	class bot{
		private function __construct(){
			if(!globals::sock = fsockopen(globals::config['server'],globals::config['port'])){
				die($this->log("Could not connect\r\n"));
			}
			$this->raw("NICK {globals::config['nick']}");
			$this->raw("USER {globals::config['nick']} {globals::config['nick']} {globals::config['nick']} :{globals::config['nick']}");
			$this->main();
		}
		private function main(){
			$data = trim(fgets(globals::sock));
			$this->log($data);
			$ex = explode(" ",$data);
			if($ex[1] == "001"){
				$this->raw("JOIN {globals::config['chans']}");
			}
		}
		function raw($msg){
			fputs(globals::sock,$msg."\r\n");
			$this->log($msg."\r\n");
		}
		function msg($chan,$msg){
			$this->raw("PRIVMSG $chan :$msg");
		}
		function log($msg){
			$msg = trim($msg);
			echo("[".date("c",time())."]$msg\r\n");
		}
	}
	globals::_init();
	$bot = new bot();