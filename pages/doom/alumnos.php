<div class="alumCont">
    <div class="row menuCont">
        <?php include_once 'menuAlum.php'; ?>
        
        <div class="col-6 displayCont">
            <?php
                error_reporting(0);
                if($_GET['Page']==null){
                    $i='none';
                }else{
                    $i=$_GET['Page'];
                }
                switch ($i) {
                    case 'Becas':
                        include_once (__DIR__ . "/alumCom/becas.php");
                        echo $i;
                    break;
                    case 'Recidencias':
                        include_once (__DIR__ . "/alumCom/recidencias.php");
                        echo $i;
                    break;
                    case 'Reinscripcion':
                        include_once (__DIR__ . "/alumCom/reincripcion.php");
                        echo $i;
                    break;
                    case 'Reticula':
                        include_once (__DIR__ . "/alumCom/reticula.php");
                        echo $i;
                    break;
                    case 'Servicio':
                        include_once (__DIR__ . "/alumCom/servicio.php");
                        echo $i;
                    break;
                    case 'Calendario':
                        include_once (__DIR__ . "/alumCom/calendario.php");
                        echo $i;
                    break;
                    case 'Temario':
                        include_once (__DIR__ . "/alumCom/temario.php");
                        echo $i;
                    break;
                    case 'Organigrama':
                        include_once (__DIR__ . "./alumCom/organigrama.php");
                        echo $i;
                    break;
                    case 'Actividades':
                        include_once (__DIR__ . "/alumCom/actividades.php");
                        echo $i;
                    break;
                    case 'Horarios':
                        include_once (__DIR__ . "/alumCom/horarios.php");
                        echo $i;
                    break;
                    default:
                        echo $i;
                        include_once (__DIR__ . "/alumCom/default.php");
                    break;
                }
            ?>
            <!-- <h1><a href="#">HOLA MUNDO</a></h1> -->

        </div>
        
    </div>    
</div>