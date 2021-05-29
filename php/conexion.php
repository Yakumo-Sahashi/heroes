<?php 
    /*$server = 'localhost';
	$ussername = 'root';
	$password = '';
	$database = 'taller';

	try {
		$conexion = new PDO("mysql:host=$server;dbname=$database;",$ussername,$password);
	} catch (PDOException $e) {
		die('Connected falied: '.$getMessage());		
	}*/
	class Conectar{
		public function conexion(){
			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$bd = "taller";
			$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
			
			return $conexion;
		}
	}

	
?>