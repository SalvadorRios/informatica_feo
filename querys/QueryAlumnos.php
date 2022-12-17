<?php
error_reporting(0);

include('./../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$buscarM = "SELECT * FROM menu_alum";
$resultadoM = $conexion->prepare($buscarM);
$resultadoM->execute();
$dataM=$resultadoM->fetchAll(PDO::FETCH_ASSOC);



?>