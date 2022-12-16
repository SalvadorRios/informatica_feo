<?php  
include '../../../conexiones/conexion.php';

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$anterior = $_POST['anterior'];
$id = $_POST['id'];
$tipo = $_POST['tipo'];


// Recibo los datos de la imagen
$formato = $_FILES['formato']['name'];

if($formato == ''){
    $ins2 = $con -> query ("UPDATE recidencias SET nombre='$nombre', formato='$anterior', clave='$clave', tipo='$tipo' where id='$id'");

}else{
    echo 'esta lleno';
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/formatosR/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['formato']['tmp_name'],$directorio.$formato);
    $ins2 = $con -> query ("UPDATE recidencias SET nombre='$nombre', formato='$formato', clave='$clave', tipo='$tipo' where id='$id'");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en las recidencias');
	location.href='./../forms/formUpRecidencias.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>