<?php
include '../../../conexiones/conexion.php';

$titulo = $_POST['titulo'];
$direc = $_POST['direc'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$ins1 = $con -> query ("UPDATE contacto SET titulo='$titulo', direc='$direc', tel='$tel', email='$email' ");

	echo "<script>
    alert('Datos actualizados en el contacto');
	location.href='./../forms/formContacto.php';
	</script>";

?>