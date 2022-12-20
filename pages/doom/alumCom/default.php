<?php
error_reporting(0);

$buscarB = "SELECT * FROM alum_default where id=1";
$resultadoB = $conexion->prepare($buscarB);
$resultadoB ->execute();
$dataB=$resultadoB->fetchAll(PDO::FETCH_ASSOC);

$buscar = "SELECT * FROM alum_default";
$resultado = $conexion->prepare($buscar);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="landing is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">
        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h2>ESTUDIANTES</h2>
                    <p>Encuentra todos los documentos<br />
                    que necesitas en este sitio<br />
                </div>
            </section>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
            <?php foreach($dataB as $datB) { ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $datB['id'] ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
            <?php } ?>
            <?php foreach($data as $dat) { ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $dat['id'] ?>" aria-label="Slide 2"></button>
            <?php } ?>
            </div>
            <div class="carousel-inner">
                <?php foreach($dataB as $datB) { ?>
                    <div class="carousel-item active">
                        <img src="../../../../informatica/assets/img/carousel/<?php echo $datB['archivo'] ?>" class="d-block w-100">
                    </div>
                <?php } ?>
                <?php foreach($data as $dat) { ?>
                <div class="carousel-item">
                    <img src="../../../../informatica/assets/img/carousel/<?php echo $dat['archivo'] ?>" class="d-block w-100">
                </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>