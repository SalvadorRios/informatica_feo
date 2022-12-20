<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');

$id_user = $_GET["id_user"];
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM alum_default WHERE id=$id_user";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

    <form action="./../updates/updateBanner.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <h1>Pagina de Banner</h1>
            <?php                            
                foreach($data as $dat) {                                                
            ?>
            <label for="bienvenida">Banner</label> 
            <input id="bienvenida" name="banner" type="file" class="form-control">
            <input id="bienvenida" name="id" type="text" class="form-control" value="<?php echo $dat['id'] ?>" hidden>
            <h4>Banner actual: <?php echo $dat['archivo'] ?></h4>
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