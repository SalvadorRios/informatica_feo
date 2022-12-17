<?php 
include_once "./../vistas/header.php";
?>
<h3>Nueva foto en Galeria</h3>
<div class="ContForm">

    <form action="./../insert/insertGaleria.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
    
                <label for="bienvenida">Archivo De Imagen</label> 
                <input id="imagenHome" name="imagen" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                <label for="bienvenida">Descripcion</label> 
                <input id="imagenHome" name="des" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock">

        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php 
include_once "./../vistas/footer.php";
?>