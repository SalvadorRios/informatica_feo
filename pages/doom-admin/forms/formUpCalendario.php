<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM calendario";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

    <form action="./../updates/updateCalendario.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <h1>Pagina de Calendario</h1>
            <?php                            
                foreach($data as $dat) {                                                
            ?>
            <label for="bienvenida">Calendario</label> 
            <input id="bienvenida" name="calen" type="file" class="form-control">
            <h4>Calendario actual: <?php echo $dat['nombre'] ?></h4>
            <?php                            
                }                                          
            ?>
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>    
<?php include_once "./../vistas/footer.php"; ?>