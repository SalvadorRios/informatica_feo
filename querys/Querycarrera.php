<?php
// error_reporting(0);

include('./../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$buscar = "SELECT * FROM carrera";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$buscar2 = "SELECT * FROM carre_div2";
$resultado2 = $conexion->prepare($buscar2);
$resultado2->execute();
$data2=$resultado2->fetchAll(PDO::FETCH_ASSOC);

$buscar3 = "SELECT * FROM carre_div3";
$resultado3 = $conexion->prepare($buscar3);
$resultado3->execute();
$data3=$resultado3->fetchAll(PDO::FETCH_ASSOC);

$buscar4 = "SELECT * FROM carre_div5";
$resultado4 = $conexion->prepare($buscar4);
$resultado4->execute();
$data4=$resultado4->fetchAll(PDO::FETCH_ASSOC);


echo 'ptm reacciona';
foreach($data as $dat) { 
echo $dat['titulo'];
}

// foreach($data2 as $dat2) { 
// echo $dat2['id'];
// }

// foreach($data3 as $dat3) { 
// echo $dat3['id'];
// }

// foreach($data4 as $dat4) { 
// echo $dat4['id'];
// }

?>