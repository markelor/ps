<?php
session_start();

function fetch($name){
	if(!empty($_SESSION[$name])){
		return $_SESSION[$name];
	}else{
		$name = '';
		return $name;
	}
}

function fetchV($name){
	if(!empty($_SESSION['emailSeverError'])){	
		if(!empty($_SESSION[$name])){
			return $_SESSION[$name];	
		}		
	}
	if(!empty($_SESSION['successMessage'])){
		$name = '';
		return $name;	
	}
}



?>