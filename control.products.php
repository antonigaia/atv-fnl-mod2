<?php



if (isset($_POST['action'])) {

    include_once 'crud.php';

    switch ($_POST['action']) {

        case "insert":
            unset($_POST['action']);

            if ($_POST['pass'] != $_POST['confpass']) {
                header("location: cadastro_products.php?msg=client_passerror");
                exit();
            }

            
            $result = insert("database.products", $_POST);

            if ($result) {
                header("location: produtos.php?msg=product_add");
            } else {
                header("location: produtos.php?msg=product_error");
            }

        break;

        case "update":

            unset($_POST['action']);
            
            $id = $_POST['id'];
            unset($_POST['id']);

            $result = update("database.products",$id, $_POST);

            if ($result) {
                header("location: products.php?msg=products_edited");
            } else {
                header("location: products.php?msg=products_edit_error");
            }    


        break;

        case "delete":
            unset($_POST['action']);

            $result = delete("database.products", $_POST['id']);

            if ($result) {
                header("location: products.php?msg=products_deleted");
            } else {
                header("location: products.php?msg=products_delete_error");
            }

        break;
    }
} else {
    header("location: index.php?msg=access_denied");
}