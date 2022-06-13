<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnLibrary</title>
    <link rel="stylesheet" href="assets/css/cadastros.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Livros
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="catalago.php">Catalago</a></li>
                            <li><a class="dropdown-item" href="cad_livro.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="gec_livro.php">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Emprestimos
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cad_emprestimolivro.php">Realizar</a></li>
                            <li><a class="dropdown-item" href="gec_emprestimolivro.php">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alunos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cad_aluno.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="gec_aluno.php">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admins
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="cad_bibliotecaria.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="gec_bibliotecaria.php">Gerenciar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="form">
        <div class="container">
            <fieldset>
                <legend>Empréstimo de Livro</legend>
                <?php

                require_once 'assets/php/config.php';
                if ($_POST) {
                    $titulo_livro = $_POST["titulo_livro"];
                    
                    if ($con->query($sql) === TRUE) {
                        echo "Novo cadastro realizado com sucesso! <br>";
                    } else {
                        echo "Erro" . $sql . ' ' . $con->connect_error;
                    }

                    $con->close();
                }
                ?>
                <form action="cad_aluno.php" method="post">
                    <div class="row">
                        <div class="col-9">
                            <label for="titulo_livro" class="form-label">Livro</label>
                            <input type="text" name="titulo_livro" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="matricula_aluno" class="form-label">Aluno</label>
                            <input type="text" name="matricula_aluno" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="serie" class="form-label">Série</label>
                            <select name="serie" class="form-select">
                                <option selected></option>
                                <option value="1º">1º</option>
                                <option value="2º">2º</option>
                                <option value="3º">3º</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="curso" class="form-label">Curso</label>
                            <select name="curso" class="form-select">
                                <option selected></option>
                                <option value="Enfermagem">Enfermagem</option>
                                <option value="Informática">Informática</option>
                                <option value="Administração">Administração</option>
                                <option value="Comércio">Comércio</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="data_emp" class="form-label">Data de Empréstimo</label>
                            <input type="date" name="data_emp" class="form-control" placeholder="">
                        </div>
                        <div class="col">
                            <label for="data_rec" class="form-label">Data de Recebimento</label>
                            <input type="date" name="data_rec" class="form-control" placeholder="">
                        </div>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
            </fieldset>
        </div>
    </div>
</body>

</html>