<?php  
include '../../../conexiones/conexion.php';

$fecha = $_POST['fecha'];
$titulo = $_POST['titulo'];
$autores = $_POST['autores'];
$resumen = $_POST['resumen'];
$clave = $_POST['clave'];
$tipo = $_POST['tipo'];

// Recibo los datos de la imagen
$archivo = $_FILES['archivo']['name'];
        
        // Ruta donde se guardarán las imágenes que subamos
        $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/investigacion/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$archivo);


    $ins2 = $con -> query ("INSERT INTO inves VALUES('', '$fecha', '$titulo', '$autores', '$resumen', '$archivo', '$clave', '$tipo')");

// echo $bienvenida;
// echo $archivo;
// echo $anterior;


if ($ins2) {
	echo "<script>
    alert('Datos insertados en la investigacion');
	location.href='./../forms/form-investigacion.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>