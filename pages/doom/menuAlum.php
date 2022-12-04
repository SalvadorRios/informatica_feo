<div class="col-3 acordinCont">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php foreach($dataM as $datM) { ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingBecas">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $datM['clave'] ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapseBecas">
                    <?php echo $datM['nombre'] ?>
                </button>
                </h2>
                <div id="<?php echo $datM['clave'] ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingBecas">
                <div class="accordion-body">
                    <a class="btn btn-dark" href="<?php echo "Alumnos.php?Page=" . $datM['clave']?> "><?php echo $datM['nombre'] ?></a>
                </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
