<div class="alumCont">
    <div class="row menuCont">
        <?php include_once 'menuAlum.php'; ?>
        
        <div class="col-6 displayCont">
            <?php
                // error_reporting(0);
                if($_GET['Page']==null){
                    $i='none';
                }else{
                    $i=$_GET['Page'];
                }
                switch ($i) {
                    case 'Becas':
                        include_once (__DIR__ . "/alumCom/becas.php");
                        
                    break;
                    case 'Recidencias':
                        include_once (__DIR__ . "/alumCom/recidencias.php");
                        
                    break;
                    case 'Reinscripcion':
                        include_once (__DIR__ . "/alumCom/reincripcion.php");
                        
                    break;
                    case 'Reticula':
                        include_once (__DIR__ . "/alumCom/reticula.php");
                        echo 'reticula';
                    break;
                    case 'Servicio':
                        include_once (__DIR__ . "/alumCom/servicio.php");
                        
                    break;
                    case 'Calendario':
                        include_once (__DIR__ . "/alumCom/calendario.php");
                        
                    break;
                    case 'Temario':
                        include_once (__DIR__ . "/alumCom/temario.php");
                        
                    break;
                    case 'Organigrama':
                        include_once (__DIR__ . "./alumCom/organigrama.php");
                        
                    break;
                    case 'Actividades':
                        include_once (__DIR__ . "/alumCom/actividades.php");
                        
                    break;
                    case 'Horarios':
                        include_once (__DIR__ . "/alumCom/horarios.php");
                        
                    break;
                    default:
                        
                        include_once (__DIR__ . "/alumCom/default.php");
                    break;
                }
            ?>
        </div>
    </div>    
</div>