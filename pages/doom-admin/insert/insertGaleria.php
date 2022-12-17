<?php  
include '../../../conexiones/conexion.php';

$des = $_POST['des'];

// Recibo los datos de la imagen
$imagen = $_FILES['imagen']['name'];

    // Ruta donde se guardarán las imágenes que subamos
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/galeriaFull/';
    // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$imagen);
    $ins2 = $con -> query ("INSERT INTO galeria_full VALUES('', '$imagen', '$des')");



if ($ins2) {
	echo "<script>
    alert('Datos actualizados en la galeria');
	location.href='./../forms/formGaleria.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>