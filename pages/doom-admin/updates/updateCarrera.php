<?php  
include '../../../conexiones/conexion.php';

//query 1
$titulo = $_POST['titulo'];
$ti_div1 = $_POST['ti_div1'];
$cont_div1 = $_POST['cont_div1'];
$ti_div2 = $_POST['ti_div2'];
$ti_div4 = $_POST['ti_div4'];
$cont_div4 = $_POST['cont_div4'];
$ti_div5 = $_POST['ti_div5'];
$ti_div6 = $_POST['ti_div6'];
$cont_div6 = $_POST['cont_div6'];

$ins1 = $con -> query ("UPDATE carrera SET titulo='$titulo', ti_div1='$ti_div1', cont_div1='$cont_div1', ti_div2='$ti_div2', ti_div4='$ti_div4', cont_div4='$cont_div4', ti_div5='$ti_div5', ti_div6='$ti_div6', cont_div6='$cont_div6' ");

//query 2
$titulo21 = $_POST['titulo21'];
$cont21 = $_POST['cont21'];
$titulo22 = $_POST['titulo22'];
$cont22 = $_POST['cont22'];
$titulo23 = $_POST['titulo23'];
$cont23 = $_POST['cont23'];
$titulo24 = $_POST['titulo24'];
$cont24 = $_POST['cont24'];
$titulo25 = $_POST['titulo25'];
$cont25 = $_POST['cont25'];
$titulo26 = $_POST['titulo26'];
$cont26 = $_POST['cont26'];

$ins2 = $con -> query ("UPDATE carre_div2 SET titulo='$titulo21', cont='$cont21' WHERE id=1 ");
$ins3 = $con -> query ("UPDATE carre_div2 SET titulo='$titulo22', cont='$cont22' WHERE id=2 ");
$ins4 = $con -> query ("UPDATE carre_div2 SET titulo='$titulo23', cont='$cont23' WHERE id=3 ");
$ins5 = $con -> query ("UPDATE carre_div2 SET titulo='$titulo24', cont='$cont24' WHERE id=4 ");
$ins6 = $con -> query ("UPDATE carre_div2 SET titulo='$titulo25', cont='$cont25' WHERE id=5 ");
$ins7 = $con -> query ("UPDATE carre_div2 SET titulo='$titulo26', cont='$cont26' WHERE id=6 ");

//query 3
$titulo31 = $_POST['titulo31'];
$cont31 = $_POST['cont31'];
$imgDiv31 = $_FILES['imgDiv31']['name'];
$anteriorDiv31 = $_POST['anteriorDiv31'];
$titulo32 = $_POST['titulo32'];
$cont32 = $_POST['cont32'];
$imgDiv32 = $_FILES['imgDiv32']['name'];
$anteriorDiv32 = $_POST['anteriorDiv32'];
$titulo33 = $_POST['titulo33'];
$cont33 = $_POST['cont33'];
$imgDiv33 = $_FILES['imgDiv33']['name'];
$anteriorDiv33 = $_POST['anteriorDiv33'];

if($imgDiv31 == ''){
    $ins8 = $con -> query ("UPDATE carre_div3 SET titulo='$titulo31', cont='$cont31' , img='$anteriorDiv31' WHERE id=1");

}else{
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/carrera/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['imgDiv31']['tmp_name'],$directorio.$imgDiv31);
          $ins8 = $con -> query ("UPDATE carre_div3 SET titulo='$titulo31', cont='$cont31' , img='$imgDiv31' WHERE id=1");
}

if($imgDiv32 == ''){
    $ins9 = $con -> query ("UPDATE carre_div3 SET titulo='$titulo32', cont='$cont32' , img='$anteriorDiv32' WHERE id=2");

}else{
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/carrera/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['imgDiv32']['tmp_name'],$directorio.$imgDiv32);
          $ins9 = $con -> query ("UPDATE carre_div3 SET titulo='$titulo32', cont='$cont32' , img='$imgDiv32' WHERE id=2");
}

if($imgDiv33 == ''){
    $ins10 = $con -> query ("UPDATE carre_div3 SET titulo='$titulo33', cont='$cont33' , img='$anteriorDiv33' WHERE id=3");

}else{  
            // Ruta donde se guardarán las imágenes que subamos
          $directorio = $_SERVER['DOCUMENT_ROOT'].'/informatica/assets/img/carrera/';
          // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
          move_uploaded_file($_FILES['imgDiv33']['tmp_name'],$directorio.$imgDiv33);
          $ins10 = $con -> query ("UPDATE carre_div3 SET titulo='$titulo33', cont='$cont33' , img='$imgDiv33' WHERE id=3");
}


//query 4
$cont51 = $_POST['cont51'];
$cont52 = $_POST['cont52'];
$cont53 = $_POST['cont53'];
$cont54 = $_POST['cont54'];
$cont55 = $_POST['cont55'];
$cont56 = $_POST['cont56'];
$cont57 = $_POST['cont57'];
$cont58 = $_POST['cont58'];
$cont59 = $_POST['cont59'];
$cont510 = $_POST['cont510'];
$cont511 = $_POST['cont511'];
$cont512 = $_POST['cont512'];
$cont513 = $_POST['cont513'];

$ins11 = $con -> query ("UPDATE carre_div5 SET cont='$cont51' WHERE id=1 ");
$ins12 = $con -> query ("UPDATE carre_div5 SET cont='$cont52' WHERE id=2 ");
$ins13 = $con -> query ("UPDATE carre_div5 SET cont='$cont53' WHERE id=3 ");
$ins14 = $con -> query ("UPDATE carre_div5 SET cont='$cont54' WHERE id=4 ");
$ins15 = $con -> query ("UPDATE carre_div5 SET cont='$cont55' WHERE id=5 ");
$ins16 = $con -> query ("UPDATE carre_div5 SET cont='$cont56' WHERE id=6 ");
$ins17 = $con -> query ("UPDATE carre_div5 SET cont='$cont57' WHERE id=7 ");
$ins18 = $con -> query ("UPDATE carre_div5 SET cont='$cont58' WHERE id=8 ");
$ins19 = $con -> query ("UPDATE carre_div5 SET cont='$cont59' WHERE id=9 ");
$ins20 = $con -> query ("UPDATE carre_div5 SET cont='$cont510' WHERE id=10 ");
$ins21 = $con -> query ("UPDATE carre_div5 SET cont='$cont511' WHERE id=11 ");
$ins22 = $con -> query ("UPDATE carre_div5 SET cont='$cont512' WHERE id=12 ");
$ins23 = $con -> query ("UPDATE carre_div5 SET cont='$cont513' WHERE id=13 ");


	echo "<script>
    alert('Datos actualizados en Carrera');
	location.href='./../forms/formCarrera.php';
	</script>";

?>