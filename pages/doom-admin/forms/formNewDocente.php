<?php 
include_once "./../vistas/header.php";
?>
<h3>Nuevo Docente</h3>
<div class="ContForm">

    <form action="../insert/insertDocente.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="imagenHome" name="nombre" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" required> 
            <label for="bienvenida">Titulo</label> 
            <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" required>
            <label for="bienvenida">Correo</label> 
            <input id="imagenHome" name="correo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock"> 
            <label for="bienvenida">Foto</label> 
            <input id="imagenHome" name="foto" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock"> 
            <label for="bienvenida">CV</label> 
            <input id="imagenHome" name="file" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock">
            <label for="bienvenida">Modal</label> 
            <input id="imagenHome" name="modal" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" required> 
            <span id="imagenHomeHelpBlock" class="form-text text-muted">Modal se debe colocar solo el primer nombre del docente</span>
        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php 
include_once "./../vistas/footer.php";
?>