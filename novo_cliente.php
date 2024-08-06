<?php

session_start();

if (isset($_SESSION['user_data']) == false) {
    header("location: index.php?msg=access_denied");
}
$user = $_SESSION['user_data'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title> Cadastro </title>
</head>

<body>

    <!-- Menu princ. -->
    <?php
    include_once 'menu.php';
    ?>

    <div class="container">
        <hr>

        <div>
            <div class="card">
                <div class="card-header text-light" style="background-color:green;">
                    <b> Cadastro de Clientes </b>
                </div>
                <form action="control.clients.php" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-address-card"></i> Nome Completo
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-envelope-o"></i> Email
                                    </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                </div>

                                <div class="mb-3">
                                    <div class="merge">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-key"></i> Senha
                                        </label>
                                        <input type="password" class="form-control" id="myInputSwitch" aria-describedby="emailHelp" name="pass">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="myInputSwitch" onclick="myFunction()">
                                            <label class="form-check-label" for="myInputSwitch">Conferir</label>
                                        </div>
                                    </div>


                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-key"></i><i class="fa fa-key"></i> Conf. de Senha
                                    </label>
                                    <input type="password" class="form-control" id="myInputSwitch" aria-describedby="emailHelp" name="confpass">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-address-card-o"></i></i> CPF
                                    </label>
                                    <input type="text" class="form-control" id="cpf" aria-describedby="emailHelp" name="document">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-globe"></i></i> Endereço
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adress">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-map"></i></i> CEP
                                    </label>
                                    <input type="text" class="form-control" id="cep" aria-describedby="emailHelp" name="postalcode">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-map"></i></i> Estado
                                    </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="state">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-phone"></i></i> Telefone/Contato
                                    </label>
                                    <input type="text" class="form-control" id="telefone" aria-describedby="emailHelp" name="phone">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">
                                        <i class="fa fa-whatsapp"></i></i> Whatsapp
                                    </label>
                                    <input type="text" class="form-control" id="whatsapp" aria-describedby="emailHelp" name="whatsapp">
                                </div>

                                <div>
                                    <p class="text-end">
                                        <button type="input" class="btn btn-outline-success"><i class="fa fa-plus-square"></i> Enviar </button>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" value="insert" name="action">

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/jquery.mask.min.js"></script>
    <script src="https://kit.fontawesome.com/7f377bb488.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cpf').mask('000.000.000-00');
            $('#cep').mask('00.000-000');
            $('#telefone').mask('(00) 00000-0000');
            $('#whatsapp').mask('(00) 00000-0000');
            $('#R$').maskMoney({
                prefix: 'R$ ',
                allowNegative: true,
                thousands: '.',
                decimal: ',',
                affixesStay: false
            });
        });
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myInputSwitch");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>