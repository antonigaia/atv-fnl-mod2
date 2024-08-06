<?php



if (isset($_POST['action'])) {

    include_once 'crud.php';

    switch ($_POST['action']) {

        case "insert":
            unset($_POST['action']);

            if ($_POST['pass'] != $_POST['confpass']) {
                header("location: cadastro_cliente.php?msg=client_passerror");
                exit();
            }

            $_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $_POST['confpass'] = password_hash($_POST['confpass'], PASSWORD_DEFAULT);

            $result = insert("database.clients", $_POST);

            if ($result) {
                header("location: clientes.php?msg=client_add");
            } else {
                header("location: clientes.php?msg=client_error");
            }

        break;

        case "update":

            unset($_POST['action']);
            
            $id = $_POST['id'];
            unset($_POST['id']);

            if($_POST['newPassword'] == ""){
                $_POST['password'] = $_POST['password'];
                $_POST['confpass'] = $_POST['confpass'];    
            }else{
                $_POST['password'] = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
                $_POST['confpass'] = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
            }

            unset($_POST['newPassword']);

            $result = update("database.clients",$id, $_POST);

            if ($result) {
                header("location: clientes.php?msg=client_edited");
            } else {
                header("location: clientes.php?msg=client_edit_error");
            }    


        break;

        case "delete":
            unset($_POST['action']);

            $result = delete("database.clients", $_POST['id']);

            if ($result) {
                header("location: clientes.php?msg=client_deleted");
            } else {
                header("location: clientes.php?msg=client_delete_error");
            }

        break;
    }
} else {
    header("location: index.php?msg=access_denied");
}