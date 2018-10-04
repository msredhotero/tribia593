<?php

date_default_timezone_set('America/Buenos_Aires');

class appconfig {

function conexion() {
		/*
		$hostname = "localhost";
		$database = "tribia593";
		$username = "root";
		$password = "";
		*/
		
		$hostname = "localhost";
		$database = "593crvz";
		$username = "crvz593-bbdd";
		$password = "@5C9R3V*DB!";
		//u235498999_kike usuario
		
		
		$conexion = array("hostname" => $hostname,
						  "database" => $database,
						  "username" => $username,
						  "password" => $password);
						  
		return $conexion;
}

}




?>