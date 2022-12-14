<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM menu_alum";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

<table class="table align-middle table-primary">
<h1>Apartados de Estudiantes</h1>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Modificar</td>
                
            </tr>
        </thead>   
        <tbody>
                <?php                            
                    foreach($data as $dat) {                                                
                ?>
                    <tr>
                        <td><?php echo $dat['id'] ?></td>
                        <td><?php echo $dat['nombre'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formUp<?php echo $dat['clave'] ?>.php" >Edit</a></td>
                        
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
  
</div>    
<?php include_once "./../vistas/footer.php"; ?>