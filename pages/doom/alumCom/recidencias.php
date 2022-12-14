<?php
error_reporting(0);

$buscarC = "SELECT * FROM recidencias";
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
                    <h2>Residencias Profecionales</h2>
                </div>
            </section>
        <!-- filosofia -->
            <section id="one" class="wrapper style1 special">
                <div class="inner">
                    <header class="filosofia calendario major">
                        <h2>Proceso de Residencias Profecionales</h2>
                        <p>Puedes consultar los dumentos necesarios a continuacion.</p>
                        <div class="row">
                            <?php                            
                                foreach($dataC as $datC) {                                                
                            ?>
                                <div class="col">
                                    <?php
                                        if ($datC['tipo']=='word') {
                                    ?>
                                           <a class="btn btn-primary" href="../../../../informatica/assets/formatosR/<?php echo $datC['formato'] ?>">
                                                <?php echo $datC['nombre'] ?>
                                           </a>
                                        
                                    <?php       
                                        }else{
                                    ?>
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datC['clave'] ?>">
                                            <?php echo $datC['nombre'] ?>
                                        </button>
                                    <!-- Modal -->
                                        <div class="modal fade" id="<?php echo $datC['clave'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                    <iframe src="../../../../informatica/assets/formatosR/<?php echo $datC['formato'] ?>" frameborder="0"></iframe>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>        
                            <?php 
                                }    
                            } 
                            ?>
                        </div>    
                    </header>
                </div>
            </section>
    </div>
</div>