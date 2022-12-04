<div class="landing is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">
    
        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <?php foreach($data as $dat) { ?>
                        <h2> <?php echo $dat['titulo'] ?> </h2>
                    <?php } ?>
                </div>
            </section>

        <!-- filosofia -->
            <section id="one" class="wrapper style1 special">
                <div class="inner">
                    <header class="filosofia major">
                    <?php foreach($data as $dat) { ?>
                        <h2><?php echo $dat['ti_div1'] ?></h2>
                        <p><?php echo $dat['cont_div1'] ?></p>
                    <?php } ?>
                    </header>
                </div>
            </section>

        
        <!-- valores -->
            <section id="three" class="valoresBack wrapper style3 special">
                <div class="inner">
                    <header class="valoresBackHead major">
                        <?php foreach($data as $dat) { ?>
                            <h2 class="valores"><?php echo $dat['ti_div2'] ?></h2>
                        <?php } ?>
                    </header>
                    <ul class="features">
                        <?php foreach($data2 as $dat2) { ?>
                            <li>
                                <h3><?php echo $dat2['titulo'] ?></h3>
                                <p><?php echo $dat2['cont'] ?></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>

        <!-- Two -->
                <section id="two" class="wrapper alt style2">
                    <?php foreach($data3 as $dat3) { ?>
                        <section class="spotlight">
                            <div class="image"><img src="../../../../informatica/assets/img/default/<?php echo $dat3['img'] ?>" alt="" /></div>
                            <div class="perfilIngreso content">
                                <h2><?php echo $dat3['titulo'] ?></h2>
                                <p class="textoCarrera"><?php echo $dat3['cont'] ?></p>
                            </div>
                        </section>
                    <?php } ?>
                </section>

        <!-- Objetivo -->
                <section id="one" class="wrapper special">
                    
                        <header class="filosofia major">
                            <?php foreach($data as $dat) { ?>
                                <h2><?php echo $dat['ti_div4'] ?></h2>
                                <p><?php echo $dat['cont_div4'] ?></p>
                            <?php } ?>
                        </header>
                
                </section>

        <!-- Three -->
                <section id="three" class="valoresBack wrapper style3 special">
                            <div class="inner">
                                <header class="valoresBackHead major">
                                    <?php foreach($data as $dat) { ?>
                                        <h2 class="valores"><?php echo $dat['ti_div5'] ?></h2>
                                    <?php } ?>
                                </header>
                                <ul class="pegreso features">
                                    <?php foreach($data4 as $dat4) { ?>
                                        <li>
                                            <p><?php echo $dat4['cont'] ?></p >
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                </section>
            
        <!-- Objetivo -->
            <section id="one" class="wrapper special">
                <header class="filosofia major">
                    <?php foreach($data as $dat) { ?>
                        <h2><?php echo $dat['ti_div6'] ?></h2>
                        <p><?php echo $dat['cont_div6'] ?></p>
                    <?php } ?>
                </header>
            </section>
        
    </div>
</div>
