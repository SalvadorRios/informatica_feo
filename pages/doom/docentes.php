<div id="particles-foreground" class="vertical-centered-box"></div>
<div class="contCards">
    <h3 class="titulo tiDocentes">Docentes</h3>
    <div class="team">
        <div class="row containerCard" data-aos="zoom-in-up" data-aos-anchor-placement="top-center">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
                <div class="col-sm-4 card">
                    <div class="content">
                        <div class="imgBx"><img src="../../../informatica/assets/img/docentes/<?php echo $dat['foto'] ?>" alt=""></div>
                        <div class="contentBx">
                            <h3><?php echo $dat['nombre'] ?><br> <span><?php echo $dat['titulo'] ?></span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $dat['modal'] ?>">
                        Ver Cv
                        </button>
                        </li>
                    </ul>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="<?php echo $dat['modal'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="../../../informatica/assets/cv/<?php echo $dat['file'] ?>" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            <?php                            
                }                                               
            ?>
        </div>
    </div>
</div>
<!-- <div class="particles"  id="particles-
" ></div> -->