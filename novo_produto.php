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
    <title> Cadastro de Produto </title>
</head>

<body>

    <!-- Menu princ. -->
    <?php
    include_once 'menu.php';
    ?>

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md">
                <div class="card text-center">
                    <div class="card-header text-light" style="background-color:green;">
                        <b>Cadastro de Produtos</b>
                    </div>
                    <form action="control.products.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-address-card"></i> Nome do Produto
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa-solid fa-hand-holding-dollar"></i> Preço de Compra
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="BuyPrice">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa-solid fa-list-ol"></i> Quantidade
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa-solid fa-code"></i> Código
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="code">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa-solid fa-money-bill-transfer"></i> Preço de Venda
                                        </label>
                                        <input type="text" class="form-control" id="cep" aria-describedby="emailHelp" name="SellPrice">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa-solid fa-money-bill-trend-up"></i> Possivel Lucro
                                        </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="earn">
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
                    <!-- <div class="card-footer text-body-secondary">
                    2 days ago
                    </div> -->
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
</body>

</html>