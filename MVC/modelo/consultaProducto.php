<?php 

	class Consulta_modelo{

		private $db;
		private $personas;

		public function __construct(){

			require_once("Conectar.php");

			$this->db=Conectar::conexion();

			$this->personas=array();			

		}

		public function get_personas(){

			$consulta=$this->db->query("SELECT * FROM datos_usuario");

			while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)) {
				
				$this->personas[]=$fila;

			}

			return $this->personas;

		}

	}

 ?>