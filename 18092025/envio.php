<?php
$nombre_get = $_POST['nombre'];
$apellido_get = $_POST['PrimerApellido'];

$nombreCompleto = $nombre_get." ".$apellido_get;

echo($nombreCompleto);

?>