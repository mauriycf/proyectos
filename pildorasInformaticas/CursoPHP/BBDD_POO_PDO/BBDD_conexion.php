
<?php

  class Conexion{

    protected $conexion_db;

    public function Conexion(){

      try{

        $this->conexion_db=new PDO('pgsql:host=localhost; dbname=postgres; user=mviana; password=123456');

        $this-> conexion_db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->conexion_db;

      }catch(Exception $e){

        echo "La linea de error es: " . $e->getLine();

      }

    }

  }

 ?>
