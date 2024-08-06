<?php

    # Variaveis de controle
    $userReal = "admin@admin.com";
    $passReal = "admin";

    # Recebendo os dados do formulário
    $username = $_POST["username"];
    $password = $_POST['password'];    

    # 1º teste: testar o email:
    if($username != $userReal){
        header("location: index.php?msg=access_error");
    }elseif($password != $passReal){
        header("location: index.php?msg=access_error");
    }else{

        session_start();

        $data['user'] = "Administrador";
        $data['email'] = "admin@admin.com";
        date_default_timezone_set('America/Fortaleza');
        $data['access'] = date('d/m/Y - H:i:s');

        $_SESSION['user_data'] = $data;

        //echo "Acesso permitido!";
        header("location: index.php");
    }

?>