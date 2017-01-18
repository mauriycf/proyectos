<?php 

	class Conectar{

		public static function conexion(){

			try {
				
				$conexion= new PDO ('pgsql:host=localhost; dbname=registro; user=mviana; password=123456');

				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


			} catch (Exception $e) {

				die("Error: ". $e->getMessage());

				echo "Linea del error " . $e->getLine();
							
			}

			return $conexion;			

		}

	}

 ?>