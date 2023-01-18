<?php  
include '../../../conexiones/conexion.php';

$des = $_POST['des'];
$anterior = $_POST['anterior'];
$id = $_POST['id'];


// Recibo los datos de la imagen
$imagen = $_FILES['imagen']['name'];

if($imagen == ''){
    $ins2 = $con -> query ("UPDATE galeria_imp SET nombre='$anterior', des='$des' where id='$id'");

}else{
    echo 'esta lleno';
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/galeriaImp/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$imagen);
    $ins2 = $con -> query ("UPDATE galeria_imp SET nombre='$imagen', des='$des' where id='$id'");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en la Galeria');
	location.href='./../forms/formGaleria.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>