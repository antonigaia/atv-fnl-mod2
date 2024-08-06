<div class="container">
    <nav class="navbar navbar-expand-lg" style="background-color:green;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-helmet-safety fa-bounce"></i> Ponto do EPI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"> <i class="fa fa-home"></i> Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-users"></i> Clientes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="clientes.php"><i class="fa-solid fa-eye fa-fade"></i> Visualizar </a></li>
                            <li><a class="dropdown-item" href="novo_cliente.php"><i class="fa-solid fa-plus fa-beat-fade"></i> Adicionar </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cubes"></i> Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="produtos.php"><i class="fa-solid fa-eye fa-fade"></i> Visualizar </a></li>
                            <li><a class="dropdown-item" href="novo_produto.php"><i class="fa-solid fa-plus fa-beat-fade"></i> Adicionar </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cogs"></i> Fornecedores
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="fornecedores.php"><i class="fa-solid fa-eye fa-fade"></i> Visualizar </a></li>
                            <li><a class="dropdown-item" href="novo_fornecedor.php"><i class="fa-solid fa-plus fa-beat-fade"></i> Adicionar </a></li>
                        </ul>
                    </li>
                                        
                </ul>
                <span class="navbar-text"><a class="nav-link"  href="logout.php">  <i class="fa-solid fa-arrow-right-from-bracket"></i> Sair </a>
                </span>                                             
            </div>

            <span class="navbar-brand">
                Bem vindo(a), <?=$user['user'];?>! Logado às: <?=$user['access'];?>
            </span>  
            
            
        </div>
    </nav>
</div>