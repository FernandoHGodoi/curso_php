<!DOCTYPE html>
<?php
include_once("conexao.php"); 
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Loca Livros - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="index/assets/e-book.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="index/css/styles.css" rel="stylesheet" />

        <!--CHAMANDO UM ARQUIVO CSS DO SITE FONT AWESOME-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><img alt="logomarca loca livros" src="index/assets/localivros.png" width="70%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categoria</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Acervo</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Mais Populares</a></li>
                                <li><a class="dropdown-item" href="#!">Ciência</a></li>
                                <li><a class="dropdown-item" href="#!">Ficção</a></li>
                                <li><a class="dropdown-item" href="#!">História</a></li>
                                <li><a class="dropdown-item" href="#!">Matemática</a></li>
                                <li><a class="dropdown-item" href="#!">Português</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="pages/autenticacao/login.php">
                        <button class="btn btn-outline-dark" type="submit">
                        <i class="fas fa-user-astronaut"></i>
                            Login
                        </button>
                    </form>
                    <form class="d-flex" action="dashboard.php">
                        <button class="btn btn-outline-dark" type="submit">
                        <i class="fas fa-chart-line"></i>
                            Dashboard
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">A leitura é para o intelecto o que o exercício é para o corpo.</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Joseph Addison</p>
                </div>
            </div>
        </header>
        <div id="busca" class="input-group">
            <input id="myInput" type="text" class="form-control" placeholder="O Senhor dos Anéis: A Sociedade do Anel" aria-label="Text input with 2 dropdown buttons">
        </div>
  
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                <?php

                    $result_livro = "SELECT livro_id, nm_livro, preco, capa FROM livro";
                    $resultado = mysqli_query($conn, $result_livro);
                    while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
                        <div class="col mb-5" id="teste">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src='data:image/jpg;base64, <?php echo $row_resultado['capa']; ?>'>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $row_resultado['nm_livro']; ?></h5>
                                        <!-- Product price-->
                                        <?php echo $row_resultado['preco']; ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                </div>
                            </div>
                        </div>
                    <?php }?>





                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img alt="logomarca loca livros" src="index/assets/localivros-branco.png" width="70px">
                    </div>
                    <div class="col-8">
                        <p class="m-5 text-right text-white">Copyright &copy; Your Website 2022</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="index/js/scripts.js"></script>
    </body>
</html>