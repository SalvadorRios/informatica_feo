<!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>Galeria</h2>
        </div>
    </section>

    
        <div class="carouselBody">
            <div id="drag-container">
                <div id="spin-container">
                    <!-- Add your images (or video) here -->
                    <?php                            
                        foreach($data2 as $dat2) {                                                
                    ?>
                        <img src="../../../informatica/assets/img/galeriaImp/<?php echo $dat2['nombre'] ?>">
                    <?php                            
                        }                                               
                    ?>
                        <!-- Text at center of ground -->
                        <p style="color:Black !important;" >INFORMÁTICA</p>
                </div>
                <div id="ground"></div>
            </div>
            <div id="music-container"></div>
        </div>
    

    <section id="grid">
        <div class="row containerGrid">
            <?php                            
                foreach($data as $dat) {                                                
            ?>
            <div class="col-md-4 cube">
                <div class="flip">
                    <img src="../../../informatica/assets/img/galeriaFull/<?php echo $dat['nombre'] ?>">
                </div>
                <div class="flop">
                    <span><?php echo $dat['des'] ?></span>
                </div>
            </div>
            <?php                            
                }                                               
            ?>

            
           
        </div>
    </section>