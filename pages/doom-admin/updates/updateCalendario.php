<?php  
include '../../../conexiones/conexion.php';

// Recibo los datos de la imagen
$nombre_cale = $_FILES['calen']['name'];


if($nombre_cale == ''){
   echo 'error';
}else{
        // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/calendario/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['calen']['tmp_name'],$directorio.$nombre_cale);
    $ins2 = $con -> query ("UPDATE calendario SET nombre='$nombre_cale' ");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en el calendario');
	location.href='./../forms/formUpCalendario.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>