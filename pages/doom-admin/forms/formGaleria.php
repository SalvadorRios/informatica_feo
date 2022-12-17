<?php 
error_reporting(0);
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
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
<h1>Galeria</h1>
<div class="table-responsive">
<h3>Galeria Fotos principales</h3>
    <table class="table align-middle table-primary">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Modificar</td>
            </tr>
        </thead>   
        <tbody>
                <?php                            
                    foreach($data2 as $dat2) {                                                
                ?>
                    <tr>
                        <td><?php echo $dat2['nombre'] ?></td>
                        <td><a class="btn btn-info" href="../forms/?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
    <h3>Fotos Secundarias con Descripcion</h3>
    <a href="./formNewGaleria.php" class="btn btn-primary" >Agregar Nuevo Galeria Completa</a>
    <table class="table align-middle table-primary">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
        </thead>   
        <tbody>
                <?php                            
                    foreach($data as $dat) {                                                
                ?>
                    <tr>
                        <td><?php echo $dat['nombre'] ?></td>
                        <td><?php echo $dat['des'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formUpGaleriaFull.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="../delete/deleteGaleria.php?id_user=<?php echo $dat['id'] ?>" >Dell</a></td>
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
</div> 
<?php include_once "./../vistas/footer.php"; ?>