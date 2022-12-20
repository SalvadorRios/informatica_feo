<?php  
include '../../../conexiones/conexion.php';

// Recibo los datos de la imagen
$nombre_banner = $_FILES['banner']['name'];
$id = $_POST['id'];

if($nombre_banner == ''){
   echo 'error';
}else{
            // Ruta donde se guardarán las imágenes que subamos
            $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/carousel/';
            // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
            move_uploaded_file($_FILES['banner']['tmp_name'],$directorio.$nombre_banner);
    $ins2 = $con -> query ("UPDATE alum_default SET archivo='$nombre_banner' where id='$id' ");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en el Banner');
	location.href='./../forms/formBannerAlum.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>