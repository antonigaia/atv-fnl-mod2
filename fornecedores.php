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
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="dist/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="dist/css/buttons.bootstrap5.css">
    <title> Página de Fornecedores </title>
</head>

<body>

    <!-- Menu princ. -->
    <?php
    include_once 'menu.php';
    ?>

    <div class="container">
        <hr>

        <div>
            <table class="table table-striped nowrap" style="width:100%" id="myTable">
                <thead class="table-warning">
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Contato </th>
                    <th> Endereço </th>
                    <th> CNPJ </th>
                    <th> Ações </th>
                </thead>

                <tbody>
                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>



                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Big Ferramentas</td>
                        <td>bigferramentas@gmail.com</td>
                        <td>(84) 99884-2332</td>
                        <td>Rua Belchior da Conceição 234</td>
                        <td>XX.XXX.XXX/XXXX-XX </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                            <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Contato </th>
                    <th> Endereço </th>
                    <th> CNPJ </th>
                    <th> Ações </th>
                </tfoot>

            </table>
        </div>
    </div>
    </div>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap5.js"></script>
    <script src="dist/js/dataTables.responsive.js"></script>
    <script src="dist/js/responsive.bootstrap5.js"></script>
    <script src="dist/js/dataTables.buttons.js"></script>
    <script src="dist/js/buttons.bootstrap5.js"></script>
    <script src="dist/js/jszip.min.js"></script>
    <script src="dist/js/pdfmake.min.js"></script>
    <script src="dist/js/vfs_fonts.js"></script>
    <script src="dist/js/buttons.html5.min.js"></script>
    <script src="dist/js/buttons.print.min.js"></script>
    <script src="dist/js/buttons.colVis.min.js"></script>
    <script src="https://kit.fontawesome.com/7f377bb488.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        let table = new DataTable('#myTable', {
            responsive: true,
            layout: {
                topStart: {
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                }
            },
            stateSave: true,
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        });
    </script>

</body>

</html>