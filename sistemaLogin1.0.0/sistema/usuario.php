<?php 

	namespace sistema;

	/**
	* 
	*/
	class usuario
	{
		
		const activo = 1;
		const inactivo = 0;

		private $con;

		function __construct($con)
		{
			$this->con = $con;
		}

		public function validar($email, $pass)
		{
			if (empty($email) || empty($pass)) {
				throw new validarException('Usuario o contraseña incorrecta');
				
			}

			$rs = $this->con->selecionar(
				'SELECT * FROM usuarios WHERE email = ? AND pass = ? AND activo = ? LIMIT 1', 
				array($email, $pass, self::activo)
				);

			if(count($rs) < 1){
				throw new validarException('Usuario o contraseña Incorrecta');
				
			}

			return $rs[0];
		}

	}