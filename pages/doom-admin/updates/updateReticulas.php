<?php  
include '../../../conexiones/conexion.php';

$titulo = $_POST['titulo'];
$clave = $_POST['clave'];
$nombre_Anterior = $_POST['anterior'];
$id = $_POST['id'];

// Recibo los datos de la imagen
$nombre_ret = $_FILES['nombre']['name'];

if($nombre_ret == ''){
    echo 'error';
    $ins2 = $con -> query ("UPDATE reticulas SET titulo='$titulo', nombre='$nombre_Anterior', clave='$clave' where id='$id' ");
}else{
    echo 'esta lleno';
        
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/home/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['nombre']['tmp_name'],$directorio.$nombre_ret);
    $ins2 = $con -> query ("UPDATE reticulas SET titulo='$titulo', nombre='$nombre_ret', clave='$clave' where id='$id'");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en las Reticulas');
	location.href='./../forms/formUpReticula.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>