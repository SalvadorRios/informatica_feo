<?php
error_reporting(0);
include '../../../conexiones/conexion.php';
echo $id_user = $_GET["id_user"];
echo $semestre =  $_GET["semestre"];

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

$del1 = $con -> query("DELETE FROM $conSem WHERE id = $id_user;");

if ($del1) {
	echo "<script>
	location.href='../forms/formUpTemario.php';
	</script>";
	}else {
	  "<script>
	  alert('Error');
	  </script>";
	}

?> 