<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id_user = $_GET["id_user"];

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM docentes WHERE id=$id_user";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Edit Docente</h3>
<div class="ContForm">

    <form action="./../updates/updateDocente.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="name">Nombre</label>
                <input id="imagenHome" name="nombre" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['nombre'] ?>" > 
                <label for="bienvenida">Titulo</label> 
                <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['titulo'] ?>" >
                <label for="bienvenida">Correo</label> 
                <input id="imagenHome" name="correo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['correo'] ?>"> 
                <label for="bienvenida">Foto</label> 
                <input id="imagenHome" name="foto" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <input id="imagenHome" name="fotoAnterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['foto'] ?>" hidden> 
                <label for="bienvenida">CV</label> 
                <input id="imagenHome" name="cv" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <input id="imagenHome" name="fileAnterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['file'] ?>" hidden>
                <label for="bienvenida">Modal</label> 
                <input id="imagenHome" name="modal" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['modal'] ?>" > 
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Modal se debe colocar solo el primer nombre del docente</span>
                <input type="text" name="id" value="<?php echo $dat['id'] ?>" hidden>
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