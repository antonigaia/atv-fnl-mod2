<?php

include_once 'crud.php';

session_start();

if (isset($_SESSION['user_data']) == false) {
    header("location: index.php?msg=access_denied");
}

$user = $_SESSION['user_data'];

@$product = read("database.products")[$_GET['id']];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title> Editar Produto </title>
</head>

<body>

    <!-- Menu Principal -->
    <?php include_once 'menu.php'; ?>
    <!-- /menu principal -->

    <div class="container">
        <div>
            <?php if (isset($product)) : ?>
                <div class="card text-center border-primary text-white">
                    <div class="card-header bg-primary">
                        Editando os dados dos produtos:
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

                                    <input type="hidden" value="update" name="action">
                                    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                                

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
            <?php else : ?>
                <h3> O cliente em questão não existe! </h3>
            <?php endif; ?>
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