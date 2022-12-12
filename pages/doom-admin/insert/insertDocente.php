<?php
error_reporting(0);
include '../../../conexiones/conexion.php';

$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$correo = $_POST['correo'];
$foto = $_FILES['foto']['name'];
$cv = $_FILES['file']['name'];
$modal = $_POST['modal'];

    $fotoDocente = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/docentes/';
    move_uploaded_file($_FILES['foto']['tmp_name'],$fotoDocente.$foto);
    $cvDocente = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/cv/';
    move_uploaded_file($_FILES['file']['tmp_name'],$cvDocente.$cv);

    $ins2 = $con -> query ("INSERT INTO docentes VALUES('', '$nombre', '$titulo', '$correo', '$foto', '$cv', '$modal'); ");


if ($ins2) {
	echo "<script>
    alert('Docente Insertado');
	location.href='../forms/formDocentes.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  </script>";
	}

?>