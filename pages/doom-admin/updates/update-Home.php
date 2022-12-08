<?php  
include '../../../conexiones/conexion.php';

$bienvenida = $_POST['bienvenida'];
$anterior = $_POST['anterior'];

// Recibo los datos de la imagen
$nombre_img = $_FILES['imagenHome']['name'];
$tipo = $_FILES['imagenHome']['type'];
$tamano = $_FILES['imagenHome']['size'];

if($nombre_img == ''){
    $ins2 = $con -> query ("UPDATE inicio SET parrafo='$bienvenida', imagen='$anterior' ");

}else{
    echo 'esta lleno';
        
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/home/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['imagenHome']['tmp_name'],$directorio.$nombre_img);
    $ins2 = $con -> query ("UPDATE inicio SET parrafo='$bienvenida', imagen='$nombre_img' ");
}
// echo $bienvenida;
// echo $nombre_img;
// echo $anterior;


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en el home');
	location.href='./../forms/form-home.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>