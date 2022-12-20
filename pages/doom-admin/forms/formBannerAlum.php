<?php 
error_reporting(0);
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM alum_default";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h1>Banner activo</h1>
<a href="./formNewBanner.php" class="btn btn-primary" >Agregar Nuevo</a>
<div class="table-responsive">
    <table class="table align-middle table-primary">
        <thead>
            <tr>
                <td>Archivo</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
        </thead>   
        <tbody>
                <?php                            
                    foreach($data as $dat) {                                                
                ?>
                    <tr>
                        <td><?php echo $dat['archivo'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formUpBanner.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="../delete/deleteBanner.php?id_user=<?php echo $dat['id'] ?>" >Dell</a></td>
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
</div> 
<?php include_once "./../vistas/footer.php"; ?>