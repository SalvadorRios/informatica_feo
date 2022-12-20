<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id_user = $_GET["id_user"];

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM inves WHERE id=$id_user";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Edit Investigacion</h3>
<div class="ContForm">

    <form action="./../updates/updateInvestigacion.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="bienvenida">Fecha de recepcion y de aceptacion</label> 
                <input id="imagenHome" name="fecha" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['fecha'] ?>">
                <label for="bienvenida">Titulo</label> 
                <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['titulo'] ?>">
                <label for="bienvenida">Autores</label> 
                <input id="imagenHome" name="autores" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['autores'] ?>">
                <label for="bienvenida">Resumen</label>
                <textarea id="bienvenida" name="resumen" cols="20" rows="20" class="form-control"><?php echo $dat['resumen'] ?></textarea>
                <label for="bienvenida">Clave</label>
                <input id="imagenHome" name="clave" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['clave'] ?>">
                <span id="imagenHomeHelpBlock" class="form-text text-muted">La Clave no debe contenier espacios, numeros o caracteres especiales</span><br>
                <label for="bienvenida">Archivo De Investigacion (pdf)</label> 
                <input id="imagenHome" name="archivo" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Archivo Actual: <?php echo $dat['archivo'] ?></span><br>
                <input id="imagenHome" name="anterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['archivo']?>" hidden> 
                <input id="imagenHome" name="id" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['id']?>" hidden> 

                <select class="form-select" aria-label="Default select example" name="tipo">
                    <option selected value="<?php echo $dat['tipo'] ?>"><?php echo $dat['tipo'] ?></option>
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