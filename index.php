<?php include_once "../informatica/vistas/header/header.php"; ?>

<?php 
include('./conexiones/conexion-list.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$buscar = "SELECT * FROM inicio";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


    <section id="particles-js" class="showcase">
        <div class="container">
            <h1>INGENIERÍA INFORMÁTICA </h1>
            <p>Ingenio y Creación en Movimiento</p>
        </div>
        <a href="#one" class="more scrolly">Bienvenida</a>
    </section>


<div class="row contTextHome">

    <!-- ========== Hero Start ========== -->
    <section id="one" class="hero-area circle-wrap">
        <div class="circle x1"></div>
        <div class="circle x2"></div>
        <div class="circle x3"></div>
        <div class="circle x4"></div>
        <div class="circle x5"></div>
        <div class="circle x6"></div>
        <div class="circle x7"></div>
        <div class="circle x8"></div>
        <div class="circle x9"></div>
        <div class="circle x10"></div>
        <!-- End circle -->
        <div class="container">
        <div class="row full-height align-items-center">
            <div class="col-md-6 p-100px-t p-50px-b md-p-10px-b">
                <div class="col contText">
                    <div class="texto1">
                        <?php                            
                            foreach($data as $dat) {                                                
                        ?>
                            <?php echo $dat['parrafo'] ?>
                        <?php                            
                            }                                               
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-100px-t p-50px-b md-p-10px-t">
                <div class="col clasContImg">
                    <div class="contImgHome">
                        <?php                            
                            foreach($data as $dat) {                                                
                        ?>
                            <img class="imgHome" src="../informatica/assets/img/docentes/<?php echo $dat['imagen'] ?>" alt="">
                        <?php                            
                            }                                               
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ========== Hero End ========== -->

</div>


<?php include_once "../informatica/vistas/footer/footer.php"; ?>