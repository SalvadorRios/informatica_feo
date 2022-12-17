<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id_user = $_GET["id_user"];

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM rein WHERE id=$id_user";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Edit Reincripciones</h3>
<div class="ContForm">

    <form action="./../updates/updateReinscripcion.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="name">Titulo</label>
                <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['ti_but'] ?>" > 
                <label for="bienvenida">Archivo en PDF</label> 
                <input id="imagenHome" name="archivo" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Archivo Actual: <?php echo $dat['archivo'] ?></span><br>
                <input id="imagenHome" name="anterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['archivo'] ?>" hidden>
                <input id="imagenHome" name="id" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['id'] ?>" hidden>
                <label for="bienvenida">Clave</label> 
                <input id="imagenHome" name="clave" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['clave'] ?>">
                <span id="imagenHomeHelpBlock" class="form-text text-muted">La clave debe ser en minisculas, sin espacios ni caracteres especiales (nocambiar si existe alguna)</span>
                <label for="bienvenida">Tipo de archivo</label>
                <select class="form-select" aria-label="Default select example" name="tipo">
                    <option selected>Open this select menu</option>
                    <option value="pdf">PDF</option>
                    <option value="word">WORD</option>
                </select>
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