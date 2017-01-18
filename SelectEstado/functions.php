<?php
/*
//            __...._
//         .'`     .-`.
//        /       //``\\____
//       /  .-. .'\\_.'/    `'.
//       | /   \  /'-'`        \
//       | \   / |             ;)
//       \  '-'  |            .'
//        '-.,_  |      __..-'
//  _'=,_______'-,\__.-'
//  .=[_______.-'(___(   _
//  -"`         /  __|__/ )_
//             /   .--.     )
//            /   /   -\-.-'
//          / \  |    ~;
//          ;-'  _|     |
//     ___.|   `       |
//     `'---'`---------'
//#########################################################################
//          _                        _    _                               //
//         | |                      | |  | |                              //
//         | | ___  ___ _   ___  __ | |__| | ___ _ __ _ __ ___ _ __ __ _  //
//     _   | |/ _ \/ __| | | \ \/ / |  __  |/ _ \ '__| '__/ _ \ '__/ _` | //
//    | |__| |  __/\__ \ |_| |>  <  | |  | |  __/ |  | | |  __/ | | (_| | //
//     \____/ \___||___/\__,_/_/\_\ |_|  |_|\___|_|  |_|  \___|_|  \__,_| //
//##########################################################################
//                   Email: jessus.herrera@hotmail.com                    //
//                  Blog: www.jesuxherrera.wordpress.com                  //
//##########################################################################*/
Function  __ListarEstados(){

$host = 'localhost';
$base = 'estados';
$usuario = 'root';
$password ='root';
try{
	$conn = new PDO('mysql:host='.$host.';dbname='.$base.'', $usuario, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
}
 $sql = $conn->prepare('SELECT * FROM estados');
    $sql->execute();
    $resultado = $sql->fetchAll();
    foreach ($resultado as $row) {
        echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
    }
  }

?>
