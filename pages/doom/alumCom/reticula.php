<?php
error_reporting(0);

$buscarR = "SELECT * FROM reticulas";
$resultadoR = $conexion->prepare($buscarR);
$resultadoR->execute();
$dataR=$resultadoR->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="landing is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">
    
        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h2>Reticulas</h2>
                </div>
            </section>

            <!-- valores -->
            <section id="three" class="valoresBack wrapper style3 special">
                    <div class="inner">
                        <header class="valoresBackHead major">
                            <h2 class="valores">Reticulas</h2>
                        </header>
                        <ul class="features">
                            <?php                            
                                foreach($dataR as $datR) {                                                
                            ?>
                                <li>
                                    <h3><?php echo $datR['titulo'] ?></h3>
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datR['clave'] ?>">
                                        Ver Reticula Generica
                                        </button>
                                    <!-- Modal -->
                                        <div class="modal fade" id="<?php echo $datR['clave'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe src="../../../informatica/assets/reticulas/<?php echo $datR['nombre'] ?>" frameborder="0"></iframe>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
            </section>

    </div>
</div>