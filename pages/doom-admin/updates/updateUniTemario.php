<?php  
include '../../../conexiones/conexion.php';

$semestre = $_POST['semestre'];
$anterior = $_POST['anterior'];
$id = $_POST['id'];

if ($semestre  == 'PrimerSemestre') {
    # code...
    $conSem='tem_primero';
}else{
    if ($semestre  == 'SegundoSemestre') {
        # code...
        $conSem='tem_segundo';
    }else{
        if ($semestre  == 'TercerSemestre') {
            # code...
            $conSem='tem_tercero';
        }else{
            if ($semestre  == 'CuartoSemestre') {
                # code...
                $conSem='tem_cuarto';
            }else{
                if ($semestre  == 'QuintoSemestre') {
                    # code...
                    $conSem='tem_quinto';
                }else{
                    if ($semestre  == 'SextoSemestre') {
                        # code...
                        $conSem='tem_sexto';
                    }else{
                        if ($semestre  == 'SeptimoSemestre') {
                            # code...
                            $conSem='tem_septimo';
                        }else{
                            if ($semestre  == 'OctavoSemestre') {
                                # code...
                                $conSem='tem_octavo';
                            }else{
                                if ($semestre  == 'NovenoSemestre') {
                                    # code...
                                    $conSem='temp_noveno';
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}


// Recibo los datos de la imagen
$formato = $_FILES['formato']['name'];

if($formato == ''){
    $ins2 = $con -> query ("UPDATE $conSem SET semestre='$semestre', nombre='$anterior' where id='$id'");

}else{
    echo 'esta lleno';
            // Ruta donde se guardarán las imágenes que subamos

                if ($semestre  == 'PrimerSemestre') {
                        # code...
                        $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Primer semestre/';
                    }else{
                        if ($semestre  == 'SegundoSemestre') {
                            # code...
                            $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Segundo semestre/';
                        }else{
                            if ($semestre  == 'TercerSemestre') {
                                # code...
                                $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Tercer semestre/';
                            }else{
                                if ($semestre  == 'CuartoSemestre') {
                                    # code...
                                    $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Cuarto semestre/';
                                }else{
                                    if ($semestre  == 'QuintoSemestre') {
                                        # code...
                                        $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Quinto semestre/';
                                    }else{
                                        if ($semestre  == 'SextoSemestre') {
                                            # code...
                                            $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Sexto semestre/';
                                        }else{
                                            if ($semestre  == 'SeptimoSemestre') {
                                                # code...
                                                $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Séptimo semestre/';
                                            }else{
                                                if ($semestre  == 'OctavoSemestre') {
                                                    # code...
                                                    $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Octavo semestre/';
                                                }else{
                                                    if ($semestre  == 'NovenoSemestre') {
                                                        # code...
                                                        $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/Temarios/Noveno semestre/';
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }


          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['formato']['tmp_name'],$directorio.$formato);
    $ins2 = $con -> query ("UPDATE $conSem SET semestre='$semestre', nombre='$formato' where id='$id'");
}


if ($ins2) {
	echo "<script>
    alert('Datos actualizados en los temarios');
	location.href='./../forms/formUpTemario.php';
	</script>";
	}else {
	  "<script>
	  alert('el registro no pudo ser guardado');
	  location.href='../index.php';
	  </script>";
	}

?>