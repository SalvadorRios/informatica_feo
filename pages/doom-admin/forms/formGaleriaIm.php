<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id_user = $_GET["id_user"];

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM galeria_imp WHERE id=$id_user";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Edit Galeria</h3>
<div class="ContForm">

    <form action="./../updates/updateGaleria.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
    
                <label for="bienvenida">Archivo De Imagen</label> 
                <input id="imagenHome" name="imagen" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Archivo Actual: <?php echo $dat['nombre'] ?></span><br>
                <input id="imagenHome" name="anterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['nombre']?>" hidden> 
                <input id="imagenHome" name="id" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['id']?>" hidden> 
                <label for="bienvenida">Descripcion</label> 
                <input id="imagenHome" name="des" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['des'] ?>">
            <?php                            
                }                                         
            ?>
        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php 
include_once "./../vistas/footer.php";
?>