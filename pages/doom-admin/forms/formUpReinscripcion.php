<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM rein";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

<table class="table align-middle table-primary">
<h1>Apartados de Reincripcion</h1>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Nombre</td>
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
                        <td><?php echo $dat['ti_but'] ?></td>
                        <td><?php echo $dat['archivo'] ?></td>
                        <td><?php echo $dat['clave'] ?></td>
                        <td><?php echo $dat['tipo'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formReincripcion.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="../delete/deleteReinscripcion.php?id_user=<?php echo $dat['id'] ?>" >Dell</a></td>  
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
  
</div>    
<?php include_once "./../vistas/footer.php"; ?>