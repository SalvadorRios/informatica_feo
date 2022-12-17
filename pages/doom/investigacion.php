<!-- Banner -->
<section id="banner">
        <div class="inner">
            <h2>Linea De Investigacion</h2>
        </div>
</section>
<?php                            
    foreach($data as $dat) {                                                
?>
    <div class="card investigacion">
    <h5 class="card-header"><?php echo $dat['fecha'] ?></h5>
    <div class="card-body">
        <h5 class="card-title"><?php echo $dat['titulo'] ?></h5>
        <p style="color:Black !important;" class="card-text autores"><?php echo $dat['autores'] ?></p>
        <p style="color:Black !important;" class="card-text resumen"><?php echo $dat['resumen'] ?></p>

        <?php
            if ($dat['tipo']=='word') {
        ?>
                <a class="btn btn-primary" href="../../../informatica/assets/investigacion/<?php echo $dat['archivo'] ?>">
                    ver mas
                </a>
            
        <?php       
            }else{
        ?>
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $dat['clave'] ?>">
                ver mas
            </button>
        <!-- Modal -->
            <div class="modal fade" id="<?php echo $dat['clave'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <iframe src="../../../informatica/assets/investigacion/<?php echo $dat['archivo'] ?>" frameborder="0"></iframe>
                        
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
        ?> 


    </div>
    <?php                            
        }                                               
    ?>
</div>