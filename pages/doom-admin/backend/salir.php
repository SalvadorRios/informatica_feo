<?php
    include_once '../conexiones/test.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session akhdahd
        session_destroy(); 
    }  
    header('location: ../index.php');   
?>
