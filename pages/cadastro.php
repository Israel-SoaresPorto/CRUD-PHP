<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <title>Cadastro de Estudantes</title>
</head>

<body class="vh-100 bg-primary-subtle d-flex flex-column">
    <nav class="navbar navbar-expand-sm bg-secondary">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand text-white" href="#">Cadastro de Estudantes</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarContent"
                aria-controls="navbarContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse d-md-flex justify-content-end"
                id="navbarContent">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="./listagem.php">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="./busca.php">Busca</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container d-flex align-items-center justify-content-center flex-grow-1">
        <div class="bg-white p-4 rounded-3 text-center">
            <?php

            include '../config/config.php';

            $nome = $_POST['nome'];
            $escolaridade = $_POST['escolaridade'];
            $serie = intval($_POST['serie']);

            $sql = "INSERT INTO estudantes(nome, escolaridade, serie) VALUES('$nome', '$escolaridade', $serie)";

            if ($conn->query($sql)) {
                echo "<h3 class='mb-4'>Os dados foram cadastrado com sucesso.</h3>";
            } else {
                echo "<h3 class='mb-4'>Houve um erro durante a inserção dos dados</h3>";
                echo '<h4 class="mb-4">'.mysqli_error($conn).'</h4>';
            }
            ?>
            <div class="d-flex gap-4 justify-content-center">
                <a href="../index.html" class="btn btn-primary">Voltar para cadastro</a>
                <a href="./listagem.php" class="btn btn-primary">Ir para Listagem</a>
            </div>
        </div>
    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>