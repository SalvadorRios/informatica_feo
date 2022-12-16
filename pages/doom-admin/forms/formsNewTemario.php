<?php 
include_once "./../vistas/header.php";

?>
<h3>Introducir Temario</h3>
<div class="ContForm">

    <form action="./../insert/insertTemario.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="name">Seleccione Semestre</label><br>
                <select class="form-select" aria-label="Default select example" name="semestre" required>
                    <option value="PrimerSemestre">PrimerSemestre</option>
                    <option value="SegundoSemestre">SegundoSemestre</option>
                    <option value="TercerSemestre">TercerSemestre</option>
                    <option value="CuartoSemestre">CuartoSemestre</option>
                    <option value="QuintoSemestre">QuintoSemestre</option>
                    <option value="SextoSemestre">SextoSemestre</option>
                    <option value="SeptimoSemestre">SeptimoSemestre</option>
                    <option value="OctavoSemestre">OctavoSemestre</option>
                    <option value="NovenoSemestre">NovenoSemestre</option>
                </select>
                <label for="bienvenida">Archivo en PDF</label> 
                <input id="imagenHome" name="formato" type="file" class="form-control" aria-describedby="imagenHomeHelpBlock" id="name"> 
        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php 
include_once "./../vistas/footer.php";
?>