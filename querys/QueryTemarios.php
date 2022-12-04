<?php
// error_reporting(0);

$buscarSE = "SELECT * FROM semestres";
$resultadoSE = $conexion->prepare($buscarSE);
$resultadoSE->execute();
$dataSE=$resultadoSE->fetchAll(PDO::FETCH_ASSOC);

$buscarT1 = "SELECT * FROM tem_primero";
$resultadoT1 = $conexion->prepare($buscarT1);
$resultadoT1->execute();
$dataT1=$resultadoT1->fetchAll(PDO::FETCH_ASSOC);

$buscarT2 = "SELECT * FROM tem_segundo";
$resultadoT2 = $conexion->prepare($buscarT2);
$resultadoT2->execute();
$dataT2=$resultadoT2->fetchAll(PDO::FETCH_ASSOC);

$buscarT3 = "SELECT * FROM tem_tercero";
$resultadoT3 = $conexion->prepare($buscarT3);
$resultadoT3->execute();
$dataT3=$resultadoT3->fetchAll(PDO::FETCH_ASSOC);

$buscarT4 = "SELECT * FROM tem_cuarto";
$resultadoT4 = $conexion->prepare($buscarT4);
$resultadoT4->execute();
$dataT4=$resultadoT4->fetchAll(PDO::FETCH_ASSOC);

$buscarT5 = "SELECT * FROM tem_quinto";
$resultadoT5 = $conexion->prepare($buscarT5);
$resultadoT5->execute();
$dataT5=$resultadoT5->fetchAll(PDO::FETCH_ASSOC);

$buscarT6 = "SELECT * FROM tem_sexto";
$resultadoT6 = $conexion->prepare($buscarT6);
$resultadoT6->execute();
$dataT6=$resultadoT6->fetchAll(PDO::FETCH_ASSOC);

$buscarT7 = "SELECT * FROM tem_septimo";
$resultadoT7 = $conexion->prepare($buscarT7);
$resultadoT7->execute();
$dataT7=$resultadoT7->fetchAll(PDO::FETCH_ASSOC);

$buscarT8 = "SELECT * FROM tem_octavo";
$resultadoT8 = $conexion->prepare($buscarT8);
$resultadoT8->execute();
$dataT8=$resultadoT8->fetchAll(PDO::FETCH_ASSOC);

$buscarT9 = "SELECT * FROM temp_noveno";
$resultadoT9 = $conexion->prepare($buscarT9);
$resultadoT9->execute();
$dataT9=$resultadoT9->fetchAll(PDO::FETCH_ASSOC);

?>