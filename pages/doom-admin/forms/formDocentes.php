<?php 
error_reporting(0);
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM docentes";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h1>Docentes Activos</h1>
<a href="./formNewDocente.php" class="btn btn-primary" >Agregar Nuevo</a>
<div class="table-responsive">
    <table class="table align-middle table-primary">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Titulo</td>
                <td>Correo</td>
                <td>Foto</td>
                <td>CV</td>
                <td>Clave</td>
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
                        <td><?php echo $dat['titulo'] ?></td>
                        <td><?php echo $dat['correo'] ?></td>
                        <td><?php echo $dat['foto'] ?></td>
                        <td><?php echo $dat['file'] ?></td>
                        <td><?php echo $dat['modal'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formUpDocentes.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="../delete/deleteDocente.php?id_user=<?php echo $dat['id'] ?>" >Dell</a></td>
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
</div> 
<?php include_once "./../vistas/footer.php"; ?>