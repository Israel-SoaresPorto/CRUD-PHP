<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <title>Lista de Estudantes</title>
</head>

<body class="bg-primary-subtle d-flex flex-column">
    <nav class="navbar navbar-expand-sm bg-secondary">
        <div class="container-fluid d-flex justify-content-between gap-3">
            <a class="navbar-brand text-white" href="#">Listagem de Estudantes</a>
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
                        <a class="nav-link link-light" href="../index.html">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="./busca.php">Busca</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">

        <table class="table table-hover table-striped table-bordered" style="max-width: 50em">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Escolaridade</th>
                    <th>Série</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include '../config/config.php';

                $sql = "SELECT * FROM estudantes";
                $result = $conn->query($sql);

                if ($result) {
                    while ($row = $result->fetch_assoc()) {

                        $escolaridade = "Ensino " . ucfirst($row['escolaridade']);
                        $serie = $row['serie'] . "° Ano";

                        echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['nome'] . "</td>
                                <td>" . $escolaridade . "</td>
                                <td>" . $serie . "</td>
                            </tr>";
                    }
                }

                ?>
            </tbody>
        </table>

    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>