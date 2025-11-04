<?php
// Almacenar variables donde se tiene informacion de la base de datos y en el servidor
$host = '127.0.0.1:3306';
$user = 'root';
$password = '321270393';
$dbname = 'crud_app';
$conn = new mysqli($host,$user,$password,$dbname);

if($conn -> connect_error){
    die('Error en la conexion a la DB :( : '.$conn -> connect_error);
} else{
    echo "Conexion realizada";
}
?>