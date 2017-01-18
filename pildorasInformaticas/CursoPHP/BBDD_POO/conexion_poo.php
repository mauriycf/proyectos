<?php

    //nombre de la base de datos
    $dbname= "postgres";
    //nombre del servidor
    $host = "localhost";
    //nombre usuario base de datos
    $user = "mviana";
    //contraseña de usuario
    $pass = 123456;
    //puerto postgres
    $port = 5432;
    $dbh;

    //creando la conexion a la base de datos $dbname

    $busqueda = $_GET["buscar"];

    try {

      $dbh = new PDO('pgsql:dbname=postgres;
                                   host=localhost;
                                   user=mviana;
                                   password=123456');

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "SELECT idProductos, nombre, precio, codigo FROM productos WHERE idProductos = ?";

      $result = $dbh -> prepare($sql);

      $result -> execute(array("$busqueda"));

      while($registro = $result -> fetch(PDO::FETCH_ASSOC)){

        echo "Nombre Articulo: " . $registro['nombre'] . "precio: " . $registro['precio'] . "codigo: " . $registro['codigo'] . "<br>";

      }

      $result -> closeCursor();

    } catch (Exception $e) {

      die('Error: ' . $e->GetMessage());

    }finally{

      $dbh = null;

    }

 ?>
