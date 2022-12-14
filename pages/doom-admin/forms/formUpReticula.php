<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM Reticulas";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

<table class="table align-middle table-primary">
<h1>Apartados de Estudiantes</h1>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Nombre</td>
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
                        <td><?php echo $dat['titulo'] ?></td>
                        <td><?php echo $dat['nombre'] ?></td>
                        <td><?php echo $dat['clave'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formReticula.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="../delete/deleteDocente.php?id_user=<?php echo $dat['id'] ?>" >Dell</a></td>  
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
  
</div>    
<?php include_once "./../vistas/footer.php"; ?>