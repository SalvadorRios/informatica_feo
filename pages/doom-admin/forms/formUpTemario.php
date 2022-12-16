<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM semestres";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

<table class="table align-middle table-primary">
<h1>Apartados de Temarios</h1>
        <thead>
            <tr>
                <td>Semestre</td>
                <td>Modificar</td>
            </tr>
        </thead>   
        <tbody>
                <?php                            
                    foreach($data as $dat) {                                                
                ?>
                    <tr>
                        <td><?php echo $dat['nombre'] ?></td>
                        <td><a class="btn btn-info" href="../forms/formTemarios.php?id_user=<?php echo $dat['id'] ?>">Edit</a></td>
                    </tr>
                <?php                            
                    }                                          
                ?>
        </tbody>     
    </table>
  
</div>    
<?php include_once "./../vistas/footer.php"; ?>