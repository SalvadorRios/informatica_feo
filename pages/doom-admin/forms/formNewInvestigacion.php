<?php 
include_once "./../vistas/header.php";
include('./../../../conexiones/conexion-list.php');

?>
<h3>New Investigacion</h3>
<div class="ContForm">

    <form action="./../insert/insertInves.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">

                <label for="bienvenida">Fecha de recepcion y de aceptacion</label> 
                <input id="imagenHome" name="fecha" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <label for="bienvenida">Titulo</label> 
                <input id="imagenHome" name="titulo" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <label for="bienvenida">Autores</label> 
                <input id="imagenHome" name="autores" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <label for="bienvenida">Resumen</label>
                <textarea id="bienvenida" name="resumen" cols="20" rows="20" class="form-control"></textarea>
                <label for="bienvenida">Clave</label>
                <input id="imagenHome" name="clave" type="text" class="form-control" aria-describedby="imagenHomeHelpBlock">
                <span id="imagenHomeHelpBlock" class="form-text text-muted">La Clave no debe contenier espacios, numeros o caracteres especiales</span><br>
                <label for="bienvenida">Archivo De Investigacion (pdf)</label> 
                <input id="imagenHome" name="archivo" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
                
                <select class="form-select" aria-label="Default select example" name="tipo">
                    <option selected value="pdf">PDF</option>
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