<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

$id = $_GET["id_user"];

if ($id == 1) {
    # code...
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();
    $buscar = "SELECT * FROM tem_primero ";
    $resultado = $conexion->prepare($buscar);
    $resultado->execute();
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
}else{
    if ($id == 2) {
        # code...
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
        $buscar = "SELECT * FROM tem_segundo";
        $resultado = $conexion->prepare($buscar);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
    }else{
        if ($id == 3) {
            # code...
            $objeto = new Conexion();
            $conexion = $objeto->Conectar();
            $buscar = "SELECT * FROM tem_tercero";
            $resultado = $conexion->prepare($buscar);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        }else{
            if ($id == 4) {
                # code...
                $objeto = new Conexion();
                $conexion = $objeto->Conectar();
                $buscar = "SELECT * FROM tem_cuarto";
                $resultado = $conexion->prepare($buscar);
                $resultado->execute();
                $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            }else{
                if ($id == 5) {
                    # code...
                    $objeto = new Conexion();
                    $conexion = $objeto->Conectar();
                    $buscar = "SELECT * FROM tem_quinto";
                    $resultado = $conexion->prepare($buscar);
                    $resultado->execute();
                    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    if ($id == 6) {
                        # code...
                        $objeto = new Conexion();
                        $conexion = $objeto->Conectar();
                        $buscar = "SELECT * FROM tem_sexto";
                        $resultado = $conexion->prepare($buscar);
                        $resultado->execute();
                        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
                    }else{
                        if ($id == 7) {
                            # code...
                            $objeto = new Conexion();
                            $conexion = $objeto->Conectar();
                            $buscar = "SELECT * FROM tem_septimo";
                            $resultado = $conexion->prepare($buscar);
                            $resultado->execute();
                            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
                        }else{
                            if ($id == 8) {
                                # code...
                                $objeto = new Conexion();
                                $conexion = $objeto->Conectar();
                                $buscar = "SELECT * FROM tem_octavo";
                                $resultado = $conexion->prepare($buscar);
                                $resultado->execute();
                                $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
                            }else{
                                if ($id == 9) {
                                    # code...
                                    $objeto = new Conexion();
                                    $conexion = $objeto->Conectar();
                                    $buscar = "SELECT * FROM temp_noveno";
                                    $resultado = $conexion->prepare($buscar);
                                    $resultado->execute();
                                    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}


?>
<div class="ContForm">
        <table class="table align-middle table-primary">
            <h1>Apartados de Temarios</h1>
            <a href="./formsNewTemario.php" class="btn btn-primary">Añadir nuevo</a>
            <thead>
                <tr>
                    <td>Semestre</td>
                    <td>Materia</td>
                    <td>Modificar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>   
            <tbody>
                    <?php                            
                        foreach($data as $dat) {                                                
                    ?>
                        <tr>
                            <td><?php echo $dat['semestre'] ?></td>
                            <td><?php echo $dat['nombre'] ?></td>
                            <td><a class="btn btn-info" href="../forms/formUniTemario.php?id_user=<?php echo $dat['id'] ?>&semestre=<?php echo $dat['semestre'] ?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="../delete/deleteTemario.php?id_user=<?php echo $dat['id'] ?>&semestre=<?php echo $dat['semestre'] ?>">Dell</a></td>
                        </tr>
                    <?php                            
                        }                                          
                    ?>
            </tbody>     
        </table>
</div>
<?php 
include_once "./../vistas/footer.php";
?>