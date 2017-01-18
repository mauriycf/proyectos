<?php

  require 'BBDD_conexion.php';

  class DevuelveProductos extends Conexion{

    public function DevuelveProductos(){

      parent::__construct();

    }

    public function get_productos($dato){

      $resultado=$this->conexion_db->query('SELECT * FROM productos WHERE idProductos="' . $dato .'"')

      $productos=$resultado->fetch_all(MYSQLI_ASSOC);

      return $resultado;

    }

  }

 ?>
