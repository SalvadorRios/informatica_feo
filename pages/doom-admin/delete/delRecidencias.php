<?php
error_reporting(0);
include '../../../conexiones/conexion.php';
$id_user = $_GET["id_user"];

echo $id_user;
$del1 = $con -> query("DELETE FROM recidencias WHERE id = $id_user;");

if ($del1) {
	echo "<script>
	location.href='../forms/formUpRecidencias.php';
	</script>";
	}else {
	  "<script>
	  alert('Error');
	  </script>";
	}
?> 