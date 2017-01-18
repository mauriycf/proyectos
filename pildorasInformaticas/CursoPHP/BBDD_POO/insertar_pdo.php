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

    $busqueda_id = $_GET["id"];
    $busqueda_nombre = $_GET["nombre"];
    $busqueda_precio = $_GET["precio"];
    $busqueda_codigo = $_GET["codigo"];

    try {

      $dbh = new PDO('pgsql:dbname=postgres;
                                   host=localhost;
                                   user=mviana;
                                   password=123456');

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO productos (idProductos, nombre, precio, codigo) VALUES (:id, :nombre, :precio, :codigo)";

      $result = $dbh -> prepare($sql);

      $result->execute(array(":id"=>$busqueda_id, ":nombre"=>$busqueda_nombre, ":precio"=>$busqueda_precio, ":codigo"=>$busqueda_codigo));

      echo "Registro insertado con exito";

      $result -> closeCursor();

    } catch (Exception $e) {

      die('Error: ' . $e->GetMessage());

    }finally{

      $dbh = null;

    }

 ?>
