<?php
// error_reporting(0);

include('./../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$buscar = "SELECT * FROM inves";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


?>