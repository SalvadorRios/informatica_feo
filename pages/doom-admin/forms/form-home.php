<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM inicio";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="./../updates/update-Home.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="bienvenida">Bienvenida</label> 
            <?php                            
                foreach($data as $dat) {                                                
            ?>
            <textarea id="bienvenida" name="bienvenida" cols="40" rows="20" class="form-control"><?php echo $dat['parrafo'] ?></textarea>
            <?php                            
                }                                          
            ?>
        </div>
        <div class="form-group">
            <label for="imagenHome">Foto Home</label>
            <input id="imagenHome" name="imagenHome" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock"> 
            <?php                            
                foreach($data as $dat) {                                                
            ?>
            <input id="imagenHome" name="anterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['imagen'] ?>"> 
            <?php                            
                }                                          
            ?>

            <span id="imagenHomeHelpBlock" class="form-text text-muted">Seleccionar una unica fotografia</span>
        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>    
<?php include_once "./../vistas/footer.php"; ?>