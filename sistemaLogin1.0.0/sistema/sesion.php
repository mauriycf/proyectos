<?php 

	namespace sistema;

	/**
	* 
	*/
	class Sesion
	{
		
		public function __construct()
		{
			if (!isset($_SESSION)) {
				session_start();
			}
		}

		public function existe($nom)
		{
			return isset($_SESSION[$nom]);
		}

		public function grabar($nom, $valor)
		{
			$_SESSION[$nom] = $valor;
		}

		public function leer($nom)
		{
			if ($this->existe($nom)) {
				return $_SESSION[$nom];

				return null;
			}
		}

		public function excluir($nom)
		{
			if ($this->existe($nom)) {
				unset($_SESSION[$nom]);		
			}
		}

		public function destruir()
		{
			if (isset($_SESSION)) {
				return session_destroy();
			}

			return false;
		}

	}