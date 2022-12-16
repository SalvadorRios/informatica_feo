<?php 
include_once "./../vistas/header.php";
?>
<h3>nuevo formato</h3>
<div class="ContForm">

    <form action="./../insert/insertRecidencias.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="name">Titulo</label>
                <input id="imagenHome" name="nombre" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name" > 
                <label for="bienvenida">Archivo en PDF</label> 
                <input id="imagenHome" name="formato" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                <label for="bienvenida">Clave</label> 
                <input id="imagenHome" name="clave" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock" >
                <span id="imagenHomeHelpBlock" class="form-text text-muted">La clave debe ser en minisculas, sin espacios ni caracteres especiales (nocambiar si existe alguna)</span>
                <label for="bienvenida">Tipo de archivo</label>
                <select class="form-select" aria-label="Default select example" name="tipo" required>
                    <option selected>Open this select menu</option>
                    <option value="pdf">PDF</option>
                    <option value="word">WORD</option>
                </select>
        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php 
include_once "./../vistas/footer.php";
?>

