<?php
error_reporting(0);

include('../../informatica/conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$buscar = "SELECT * FROM docentes";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>