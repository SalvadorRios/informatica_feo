<?php

    session_start();

    if(!isset($_SESSION['id'])){
        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/global.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Sitio de informatica</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../../../informatica/pages/doom-admin/forms/form-home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../../../informatica/pages/doom-admin/forms/formCarrera.php">Carrera</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../../../informatica/pages/doom-admin/forms/formDocentes.php">Docentes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../../../informatica/pages/doom-admin/forms/formEstudiantes.php">Estudiantes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../../../informatica/pages/doom-admin/forms/formGaleria.php">Galeria</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../../../informatica/pages/doom-admin/forms/form-investigacion.php">Investigacion</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../../../informatica/pages/doom-admin/forms/formContacto.php">Contacto</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    


