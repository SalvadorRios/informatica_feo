<?php  
include '../../../conexiones/conexion.php';

$titulo = $_POST['titulo'];
$clave = $_POST['clave'];
$anterior = $_POST['anterior'];
$id = $_POST['id'];
$tipo = $_POST['tipo'];


// Recibo los datos de la imagen
$nombreArchivo = $_FILES['archivo']['name'];

if($nombreArchivo == ''){
    $ins2 = $con -> query ("UPDATE rein SET ti_but='$titulo', archivo='$anterior', clave='$clave', tipo='$tipo' ");

}else{
    echo 'esta lleno';
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/home/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$nombreArchivo);
    $ins2 = $con -> query ("UPDATE rein SET ti_but='$titulo', archivo='$nombreArchivo', clave='$clave', tipo='$tipo' ");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en el home');
	location.href='./../forms/formReincripcion.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>