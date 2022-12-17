<?php
// error_reporting(0);

include('./../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$buscar = "SELECT * FROM galeria_full";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$buscar2 = "SELECT * FROM galeria_imp";
$resultado2 = $conexion->prepare($buscar2);
$resultado2->execute();
$data2=$resultado2->fetchAll(PDO::FETCH_ASSOC);


?>