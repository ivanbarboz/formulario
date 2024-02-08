<?php

class DaoConexion{
	// Variable privada donde se almacene la conexion
	private static $cnn = null;

	// Metodo que devuelve una conexion
	public static function getConexion(){
		// Intentar conectar a una DB
		try {
			$db = 'id20563973_misql'; // nombre de la DB
			$dsn = "mysql:host=localhost;dbname=$db"; // cadena conexion
			$usuario = 'id20563973_ivansoft';
			$password = '62491408maMA$'; 
			// Tipo de control de errores
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

			// Crear el objeto de conexion
			$cnn = new PDO($dsn, $usuario, $password, $pdo_options);

		} catch (Exception $e) {
			$cnn = false;
            //exit('Error de conexion: '.$e->getMessage());
		}
		return $cnn;
	}
}

?>