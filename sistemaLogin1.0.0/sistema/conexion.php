<?php 

	namespace sistema;

	/**
	 * 
	 */
	 class Conexion
	 {

	 	private static $pdo;


	 	  private $servidor='localhost';
	 	  private $base='postgres';
	 	  private $usuario='root';
	 	  private $pass='root';
	 	 
	 	
	 	function __construct($servidor,$base,$usuario,$pass)
	 	{
	 		if (self::$pdo == null) {
	 			$dsn = "mysql:host={$servidor};dbname={$base};charset=utf8";
	 			self::$pdo = new \PDO($dsn, $usuario, $pass);
	 			self::$pdo -> setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
	 		}
	 	}

	 	public function preparar($sql, array $argumentos = array())
	 	{
	 		$stmt = self::$pdo->prepare($sql);
	 		foreach ($argumentos as $c => $v) {
	 			$stmt->bindValue(($c+1), $v);

	 			return $stmt;
	 		}
	 	}

	 	public function selecionar($sql, array $argumentos = array())
	 	{
	 		$stmt = $this->preparar($sql, $argumentos);
	 		$stmt->execute();
	 		return $stmt->fetchAll();
	 	}

	 	public function ejecutar($sql, array $argumentos = array())
	 	{
	 		$stmt = $this->preparar($sql, $argumentos);
	 		return $stmt->execute();
	 	}

	 } 