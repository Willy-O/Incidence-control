<?php

class conexion{
	
	private static $conexion;

	public static function abrirConexion(){

		if(!isset(self::$conexion)){

			try{
				include_once 'config.php';

				self::$conexion = new PDO('pgsql:host='.nombre_servidor.'; dbname='.base_de_datos,nombre_usuario, password);
				self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$conexion->exec("SET NAMES 'UTF8'");
			}
			catch(PDOExeption $ex){
				print "ERROR". $ex->getMessage(). "<br>";
			}
		}
	}

	public static function cerrarConexion(){
		if (isset(self::$conexion)){
			self::$conexion = null;
		}
	}

	public static function obtenerConexion(){
		if(isset(self::$conexion)){
			echo "conexion establecida";
		}
		else{
			echo "no se conecto la base de datos";
		}
		//return self::$conexion;
	}
}

conexion::abrirConexion();
conexion::obtenerConexion();

?>