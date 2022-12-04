<?php include_once (__DIR__ . "./../../../querys/QueryTemarios.php"); ?>
<div class="landing is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">
    
        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h2>Temarios</h2>
                </div>
            </section>

            <!-- valores -->
            <section id="three" class="valoresBack wrapper style3 special">
                    <div class="inner">
                        <header class="valoresBackHead major">
                            <h2 class="valores">Temarios De Informatica</h2>
                        </header>
                        <ul class="features">
                            <?php foreach($dataSE as $datSE) { ?>
                                <li>
                                    <h3><?php echo $datSE['nombre'] ?></h3>
                                    
                                    <?php
                                        if ($datSE['nombre']=='PRIMER SEMESTRE'){
                                         foreach($dataT1 as $datT1) { 
                                    ?>
                                            
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT1['semestre']; echo $datT1['id'] ?>">
                                                <?php echo $datT1['nombre'] ?>
                                            </button>
                                        <!-- Modal -->
                                            <div class="modal fade" id="<?php echo $datT1['semestre']; echo $datT1['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="../../../../informatica/assets/Temarios/Primer semestre/<?php echo $datT1['nombre'] ?>" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
    
                                    <?php
                                        }
                                        if ($datSE['nombre']=='SEGUNDO SEMESTRE'){
                                            foreach($dataT2 as $datT2) { 
                                        ?>
                                                        
                                            <!-- Button trigger modal -->
                                                <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT2['semestre']; echo $datT2['id'] ?>">
                                                    <?php echo $datT2['nombre'] ?>
                                                </button>
                                            <!-- Modal -->
                                                <div class="modal fade" id="<?php echo $datT2['semestre']; echo $datT2['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe src="../../../../informatica/assets/Temarios/Segundo semestre/<?php echo $datT2['nombre'] ?>" frameborder="0"></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
        
                                        <?php
                                        }
                                        if ($datSE['nombre']=='TERCER SEMESTRE'){
                                        foreach($dataT3 as $datT3) { 
                                            ?>
                                                    
                                            <!-- Button trigger modal -->
                                                <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT3['semestre']; echo $datT3['id'] ?>">
                                                    <?php echo $datT3['nombre'] ?>
                                                </button>
                                            <!-- Modal -->
                                                <div class="modal fade" id="<?php echo $datT3['semestre']; echo $datT3['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe src="../../../../informatica/assets/Temarios/Tercer semestre/<?php echo $datT3['nombre'] ?>" frameborder="0"></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            <?php } ?>
        
                                        <?php
                                        }
                                        if ($datSE['nombre']=='CUARTO SEMESTRE'){
                                            foreach($dataT4 as $datT4) { 
                                                ?>
                                                
                                            <!-- Button trigger modal -->
                                                <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT4['semestre']; echo $datT4['id'] ?>">
                                                    <?php echo $datT4['nombre'] ?>
                                                </button>
                                            <!-- Modal -->
                                                <div class="modal fade" id="<?php echo $datT4['semestre']; echo $datT4['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe src="../../../../informatica/assets/Temarios/Cuarto semestre/<?php echo $datT4['nombre'] ?>" frameborder="0"></iframe>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            <?php } ?>
        
                                        <?php
                                        }
                                        if ($datSE['nombre']=='QUINTO SEMESTRE'){
                                            foreach($dataT5 as $datT5) { 
                                                ?>
                                                        
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT5['semestre']; echo $datT5['id'] ?>">
                                                            <?php echo $datT5['nombre'] ?>
                                                        </button>
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="<?php echo $datT5['semestre']; echo $datT5['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe src="../../../../informatica/assets/Temarios/Quinto semestre/<?php echo $datT5['nombre'] ?>" frameborder="0"></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                    <?php } ?>
                
                                                <?php
                                        }
                                        if ($datSE['nombre']=='SEXTO SEMESTRE'){
                                            foreach($dataT6 as $datT6) { 
                                                ?>
                                                        
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT6['semestre']; echo $datT6['id'] ?>">
                                                            <?php echo $datT6['nombre'] ?>
                                                        </button>
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="<?php echo $datT6['semestre']; echo $datT6['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe src="../../../../informatica/assets/Temarios/Sexto semestre/<?php echo $datT6['nombre'] ?>" frameborder="0"></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                    <?php } ?>
                
                                                <?php
                                        }
                                        if ($datSE['nombre']=='SEPTIMO SEMESTRE'){
                                            foreach($dataT7 as $datT7) { 
                                                ?>
                                                        
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT7['semestre']; echo $datT7['id'] ?>">
                                                            <?php echo $datT7['nombre'] ?>
                                                        </button>
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="<?php echo $datT7['semestre']; echo $datT7['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe src="../../../../informatica/assets/Temarios/Séptimo semestre/<?php echo $datT7['nombre'] ?>" frameborder="0"></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                    <?php } ?>
                
                                                <?php
                                        }
                                        if ($datSE['nombre']=='OCTAVO SEMESTRE'){
                                            foreach($dataT8 as $datT8) { 
                                                ?>
                                                        
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT8['semestre']; echo $datT8['id'] ?>">
                                                            <?php echo $datT8['nombre'] ?>
                                                        </button>
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="<?php echo $datT8['semestre']; echo $datT8['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe src="../../../../informatica/assets/Temarios/Octavo semestre/<?php echo $datT8['nombre'] ?>" frameborder="0"></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                    <?php } ?>
                
                                                <?php
                                        }
                                        if ($datSE['nombre']=='NOVENO SEMESTRE'){
                                            foreach($dataT9 as $datT9) { 
                                                ?>
                                                        
                                                    <!-- Button trigger modal -->
                                                        <button type="button" class="btnTem btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $datT9['semestre']; echo $datT9['id'] ?>">
                                                            <?php echo $datT9['nombre'] ?>
                                                        </button>
                                                    <!-- Modal -->
                                                        <div class="modal fade" id="<?php echo $datT9['semestre']; echo $datT9['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe src="../../../../informatica/assets/Temarios/Noveno semestre/<?php echo $datT9['nombre'] ?>" frameborder="0"></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                    <?php } ?>
                
                                                <?php
                                        }
                                     ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
            </section>
    </div>
</div>