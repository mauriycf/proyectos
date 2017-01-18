<?php  

	/**
	* 
	*/
	class insertarPersona
	{
		
		public function __construct()
		{
			require_once 'conectar.php';
			$this->db=conectar::conexion();
			$this->personas=array();
		}

		public function set_persona(){
			
		}

	}