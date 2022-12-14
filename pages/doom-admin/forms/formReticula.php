<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id_user = $_GET["id_user"];

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM reticulas WHERE id=$id_user";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Edit Docente</h3>
<div class="ContForm">

    <form action="./../updates/updateReticulas.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="name">Titulo</label>
                <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['titulo'] ?>" > 
                <label for="bienvenida">Reticula en PDF</label> 
                <input id="imagenHome" name="nombre" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <input id="imagenHome" name="anterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['nombre'] ?>" hidden>
                <input id="imagenHome" name="id" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['id'] ?>" hidden>
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Reticula Actual: <?php echo $dat['nombre'] ?></span><br>
                <label for="bienvenida">Clave</label> 
                <input id="imagenHome" name="clave" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['clave'] ?>">
                <span id="imagenHomeHelpBlock" class="form-text text-muted">La clave debe ser en minisculas, sin espacios ni caracteres especiales (nocambiar si existe alguna)</span>
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