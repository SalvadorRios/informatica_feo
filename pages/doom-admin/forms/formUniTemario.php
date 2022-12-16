<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id = $_GET["id_user"];
$semestre = $_GET["semestre"];

if ($semestre  == 'PrimerSemestre') {
    # code...
    $conSem='tem_primero';
}else{
    if ($semestre  == 'SegundoSemestre') {
        # code...
        $conSem='tem_segundo';
    }else{
        if ($semestre  == 'TercerSemestre') {
            # code...
            $conSem='tem_tercero';
        }else{
            if ($semestre  == 'CuartoSemestre') {
                # code...
                $conSem='tem_cuarto';
            }else{
                if ($semestre  == 'QuintoSemestre') {
                    # code...
                    $conSem='tem_quinto';
                }else{
                    if ($semestre  == 'SextoSemestre') {
                        # code...
                        $conSem='tem_sexto';
                    }else{
                        if ($semestre  == 'SeptimoSemestre') {
                            # code...
                            $conSem='tem_septimo';
                        }else{
                            if ($semestre  == 'OctavoSemestre') {
                                # code...
                                $conSem='tem_octavo';
                            }else{
                                if ($semestre  == 'NovenoSemestre') {
                                    # code...
                                    $conSem='temp_noveno';
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM $conSem WHERE id=$id ";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Edit Temario</h3>
<div class="ContForm">

    <form action="./../updates/updateUniTemario.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <label for="name"><?php echo $dat['semestre'] ?></label><br>
                <input id="imagenHome" name="semestre" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" value="<?php echo $dat['semestre'] ?>" hidden> 
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Colocar el semestre de la siguiente forma (PrimerSemestre) </span><br>
                <label for="bienvenida">Archivo en PDF</label> 
                <input id="imagenHome" name="formato" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                <span id="imagenHomeHelpBlock" class="form-text text-muted">Archivo Actual: <?php echo $dat['nombre'] ?></span><br>
                <input id="imagenHome" name="anterior" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['nombre'] ?>" hidden>
                <input id="imagenHome" name="id" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" value="<?php echo $dat['id'] ?>" hidden>
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