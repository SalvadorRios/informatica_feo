<?php
error_reporting(0);

$buscarC = "SELECT * FROM calendario";
$resultadoC = $conexion->prepare($buscarC);
$resultadoC->execute();
$dataC=$resultadoC->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="landing is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">
    
        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h2>Calendario</h2>
                </div>
            </section>
        <!-- filosofia -->
            <section id="one" class="wrapper style1 special">
                <div class="inner">
                    <header class="filosofia calendario major">
                        <h2>Calendario actual</h2>
                        <p>Puedes consultar el calendario en el siguiente botton.</p>
                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fabian">
                                Ver Calendario
                                </button>
                            <!-- Modal -->
                                <div class="modal fade" id="fabian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php                            
                                            foreach($dataC as $datC) {                                                
                                            ?>
                                            <iframe src="../../../informatica/assets/calendario/<?php echo $datC['nombre'] ?>" frameborder="0"></iframe>
                                            <?php } ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                    </header>
                </div>
            </section>
    </div>
</div>