<?php

    include_once 'crud.php';

    session_start();

    if (isset($_SESSION['user_data']) == false) {
        header("location: index.php?msg=access_denied");
    }

    $user = $_SESSION['user_data'];

    @$client = read("database.clients")[$_GET['id']];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title> Editar Cliente </title>
</head>

<body>

    <!-- Menu Principal -->
    <?php include_once 'menu.php'; ?>
    <!-- /menu principal -->

    <div class="container">
        <hr>
        <div class="row">
            
            </div>
            <div>
                <?php if(isset($client)): ?>
                <div class="card text-center border-primary text-white">
                    <div class="card-header bg-primary">
                        Editando os dados do cliente:
                    </div>
                    <form action="control.clients.php" method="POST">
                        <div class="card-body text-primary">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-address-card"></i> Nome Completo
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?=$client[0];?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-envelope-o"></i> Email
                                        </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$client[1];?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-key"></i> Nova Senha (Modifique se quiser alterar)
                                        </label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="newPassword">
                                    </div>

                                    <input type="hidden" name="password" value="<?=$client[2];?>">
                                    <input type="hidden" name="confpass" value="<?=$client[3];?>">
                                    
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-address-card-o"></i></i> CPF    
                                        </label>
                                        <input type="text" class="form-control" id="cpf" aria-describedby="emailHelp" name="document" value="<?=$client[4];?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-globe"></i></i> Endereço
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" value="<?=$client[5];?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-map"></i></i> CEP
                                        </label>
                                        <input type="text" class="form-control" id="cep" aria-describedby="emailHelp" name="zipcode" value="<?=$client[6];?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-map"></i></i> Estado
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="state" value="<?=$client[7];?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-phone"></i></i> Telefone/Contato
                                        </label>
                                        <input type="text" class="form-control" id="telefone" aria-describedby="emailHelp" name="phone" value="<?=$client[8];?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-whatsapp"></i></i> Whatsapp
                                        </label>
                                        <input type="text" class="form-control" id="whatsapp" aria-describedby="emailHelp" name="whatsapp" value="<?=$client[9];?>">
                                    </div>
                                </div>

                                <input type="hidden" value="update" name="action">
                                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                                


                                <div class="col-md-3 offset-md-9">
                                    <p class="text-end">
                                        <button class="btn btn-outline-primary">
                                            <i class="fa fa-plus-square"></i> Atualizar Cliente
                                        </button>
                                    </p>
                                </div>
                            </div>



                        </div>
                    </form>
                </div>
                <?php else: ?>
                    <h3> O cliente em questão não existe! </h3>
                <?php endif;?>
            </div>
        </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
            $('#cep').mask('00.000-000');
            $('#telefone').mask('(00) 00000-0000');
            $('#whatsapp').mask('(00) 00000-0000');
        });
    </script>
</body>

</html>