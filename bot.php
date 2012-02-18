<?php
	function main(){
		foreach(glob("./bot_modules/*.php") as $file){
			include($file);
			echo($info['module']." loaded");
			$params = array();
			foreach($info['loaded_params'] as $param => $value){
				$params[$param] = str_replace(array("%nick","%chan","%ex","%host","%server","%botnick"),array($nick,$chan,$ex,$host,$server,globals::config['nick']),$value);
			}
			$info['loaded']($info['loaded_params']);
		}
	}