<?php 
include_once "./../vistas/header.php";

error_reporting(0);

include('./../../../conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$buscar = "SELECT * FROM carrera";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

$buscar2 = "SELECT * FROM carre_div2";
$resultado2 = $conexion->prepare($buscar2);
$resultado2->execute();
$data2=$resultado2->fetchAll(PDO::FETCH_ASSOC);

$buscar3 = "SELECT * FROM carre_div3";
$resultado3 = $conexion->prepare($buscar3);
$resultado3->execute();
$data3=$resultado3->fetchAll(PDO::FETCH_ASSOC);

$buscar4 = "SELECT * FROM carre_div5";
$resultado4 = $conexion->prepare($buscar4);
$resultado4->execute();
$data4=$resultado4->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="ContForm">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="./../updates/updateCarrera.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="bienvenida">Titulo</label> 
            <?php                            
                foreach($data as $dat) {                                                
            ?>
             <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['titulo'] ?>"> 
            <?php                            
                }                                          
            ?>
        </div>
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="imagenHome">Primer apartado</label>
                <input id="imagenHome" name="ti_div1" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['ti_div1'] ?>">
                <textarea id="bienvenida" name="cont_div1" cols="40" rows="10" class="form-control"><?php echo $dat['cont_div1'] ?></textarea>
                <label for="imagenHome">Segundo apartado</label>
                <input id="imagenHome" name="ti_div2" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['ti_div2'] ?>">
            <?php                            
                }                                          
            ?>
        </div>
        <div class="form-group">
            <?php                            
                foreach($data2 as $dat2) {                                                
            ?>
                <label for="imagenHome">Titulo</label>
                <input id="imagenHome" name="titulo2<?php echo $dat2['id'] ?>" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat2['titulo'] ?>">
                <label for="imagenHome">Contenido</label>
                <textarea id="bienvenida" name="cont2<?php echo $dat2['id'] ?>" cols="40" rows="3" class="form-control"><?php echo $dat2['cont'] ?></textarea>
            <?php                            
                }                                          
            ?>
        </div>
        <div class="form-group">
            <label for="imagenHome">Tercer apartado</label>
            <br>
            <?php                            
                foreach($data3 as $dat3) {                                                
            ?>
                <label for="imagenHome">Titulo</label>
                <input id="imagenHome" name="titulo3<?php echo $dat3['id'] ?>" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat3['titulo'] ?>">
                <label for="imagenHome">Contenido</label>
                <textarea id="bienvenida" name="cont3<?php echo $dat3['id'] ?>" cols="40" rows="5" class="form-control"><?php echo $dat3['cont'] ?></textarea>
                <label for="imagenHome">Imagen</label>
                <input id="imagenHome" name="imgDiv3<?php echo $dat3['id'] ?>" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <input id="imagenHome" name="anteriorDiv3<?php echo $dat3['id'] ?>" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" readonly value="<?php echo $dat3['img'] ?>">
            <?php                            
                }                                          
            ?>
        </div>
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="imagenHome">Cuarto apartado</label>
                <input id="imagenHome" name="ti_div4" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['ti_div4'] ?>">
                <textarea id="bienvenida" name="cont_div4" cols="40" rows="5" class="form-control"><?php echo $dat['cont_div4'] ?></textarea>
                <label for="imagenHome">Quinto apartado</label>
                <input id="imagenHome" name="ti_div5" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['ti_div5'] ?>">
            <?php                            
                }                                          
            ?>
        </div>

        <?php                            
                foreach($data4 as $dat5) {                                                
            ?>
                <label for="imagenHome">Contenido</label>
                <input id="imagenHome" name="cont5<?php echo $dat5['id'] ?>" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat5['cont'] ?>">
            <?php                            
                }                                          
            ?>

        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="imagenHome">Sexto apartado</label>
                <input id="imagenHome" name="ti_div6" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['ti_div6'] ?>">
                <textarea id="bienvenida" name="cont_div6" cols="40" rows="5" class="form-control"><?php echo $dat['cont_div6'] ?></textarea>
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