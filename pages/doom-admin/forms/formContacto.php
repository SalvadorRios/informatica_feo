<?php 
include_once "./../vistas/header.php";

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM contacto";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="ContForm">

    <form action="./../updates/updateContacto.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <h1>Pagina de Contacto</h1>
            <?php                            
                foreach($data as $dat) {                                                
            ?>
            <label for="bienvenida">Titulo</label> 
            <input id="bienvenida" name="titulo" class="form-control" value="<?php echo $dat['titulo'] ?>">
            <label for="bienvenida">Direccion</label> 
            <input id="bienvenida" name="direc" class="form-control" value="<?php echo $dat['direc'] ?>">
            <label for="bienvenida">Correo</label> 
            <input id="bienvenida" name="email" class="form-control" value="<?php echo $dat['email'] ?>">
            <label for="bienvenida">Telefono</label> 
            <input id="bienvenida" name="tel" class="form-control" value="<?php echo $dat['tel'] ?>">
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