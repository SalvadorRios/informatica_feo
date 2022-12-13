<?php
include '../../../conexiones/conexion.php';

$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$correo = $_POST['correo'];
$foto = $_FILES['foto']['name'];
$cv = $_FILES['cv']['name'];
$modal = $_POST['modal'];
$id = $_POST['id'];

$fotoAnterior = $_POST['fotoAnterior'];
$fileAnterior = $_POST['fileAnterior'];


if($foto == '' && $cv == ''){
    $ins1 = $con -> query ("UPDATE docentes SET nombre='$nombre', titulo='$titulo' , correo='$correo', foto='$fotoAnterior' , file='$fileAnterior' , modal='$modal' WHERE id=$id");
}else{
    if($foto!='' && $cv == ''){
        // Ruta donde se guardarán las imágenes que subamos
        $directorioFoto = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/docentes/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['foto']['tmp_name'],$directorioFoto.$foto);
        $ins1 = $con -> query ("UPDATE docentes SET nombre='$nombre', titulo='$titulo' , correo='$correo', foto='$foto' , file='$fileAnterior' , modal='$modal' WHERE id=$id");
    }else{
        if($foto=='' && $cv!=''){
            // Ruta donde se guardarán las imágenes que subamos
            $directorioCv = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/cv/';
            // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
            move_uploaded_file($_FILES['foto']['tmp_name'],$directorioCv.$cv);
            $ins2 = $con -> query ("UPDATE docentes SET nombre='$nombre', titulo='$titulo' , correo='$correo', foto='$fotoAnterior' , file='$cv' , modal='$modal' WHERE id=$id");

        }else{
            if($foto!='' && $cv!=''){
                // Ruta donde se guardarán las imágenes que subamos
                $directorioCv = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/cv/';
                // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                move_uploaded_file($_FILES['foto']['tmp_name'],$directorioCv.$cv);
                // Ruta donde se guardarán las imágenes que subamos
                $directorioFoto = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/docentes/';
                // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                move_uploaded_file($_FILES['foto']['tmp_name'],$directorioFoto.$foto);
                $ins2 = $con -> query ("UPDATE docentes SET nombre='$nombre', titulo='$titulo' , correo='$correo', foto='$foto' , file='$cv' , modal='$modal' WHERE id=$id");
            }
        }
    }
}


?>