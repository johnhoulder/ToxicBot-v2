<?php
	if($argc < 3){
		die("Usage: {$argv[0]} <host>[:port] <nick>\r\nSSL is currently not supported. It may be added in a later version.\r\n");
	}else{
		include("./bot.php");
		$bot = new bot($argv[0],$argv[1]);
	}
?>