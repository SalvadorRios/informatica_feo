<?php 
error_reporting(0);
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM inves";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h1>Docentes Activos</h1>
<a href="./formNewInvestigacion.php" class="btn btn-primary" >Agregar Nuevo</a>
<div class="table-responsive">
    <table class="table align-middle table-primary">
        <thead>
            <tr>
                <td>Fecha</td>
                <td>Titulo</td>
                <td>Autores</td>
                <td>Resumen</td>
                <td>Archivo</td>
                <td>Clave</td>
                <td>Tipo</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
        </thead>   
        <tbody>
                <?php                            
                    foreach($data as $dat) {                                                
                ?>
                    <tr>
                        <td><?php echo $dat['fecha'] ?></td>
                        <td><?php echo $dat['titulo'] ?></td>
                        <td><?php echo $dat['autores'] ?></td>
                        <td><?php echo $dat['resumen'] ?></td>
                        <td><?php echo $dat['archivo'] ?></td>
                        <td><?php echo $dat['clave'] ?></td>
                        <td><?php echo $dat['tipo'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formUpInves.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="../delete/deleteInves.php?id_user=<?php echo $dat['id'] ?>" >Dell</a></td>
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
</div> 
<?php include_once "./../vistas/footer.php"; ?>