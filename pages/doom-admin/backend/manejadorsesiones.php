<?php
    include_once './../../../../informatica/conexiones/conexionSesion.php';
    
    session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE user = :username AND pass = :password ');
        $query->execute(['username' => $username, 'password' => $password ]);

        $row = $query->fetch(PDO::FETCH_NUM);

        // variables del usuario globales
        $id_user=$row[0];
        $_SESSION['id']=$id_user;


        if($row == true){

            header('location: ./../../../../../informatica/pages/doom-admin/forms/form-home.php');

        }else{
            // no existe el usuario
            header('location: ../../../../../404/index.html');
        }
        

    }

?>