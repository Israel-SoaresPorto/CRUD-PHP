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
                        <a class="nav-link link-light" aria-current="page" href="./listagem.php">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Busca</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5 d-flex flex-column align-items-center justify-content-center flex-grow-1">



        <div class="bg-secondary-subtle p-3 w-100" style="max-width: 40em;">
            <form action="busca.php" method="post" class="mb-5">
                <fieldset class="d-flex flex-column align-items-center">
                    <legend class="mb-4">Buscar Estudantes</legend>
                    <div class=" input-group mb-4">
                        <label for="buscar-por" class="input-group-text">Buscar por</label>
                        <select name="buscar-por" id="buscar-por" class="form-select">
                            <option value="nome">Nome</option>
                            <option value="nome">Escolaridade</option>
                            <option value="nome">Série</option>
                        </select>
                    </div>
                    <div class="input-group mb-4">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Fazer Busca
                    </button>
                </fieldset>
            </form>

            <table class="table table-hover table-striped table-bordered" style="max-width: 50em">
                <thead class="table-success">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Escolaridade</th>
                        <th>Série</th>
                    </tr>
                </thead>
                <!--  <tbody>
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
                </tbody> -->
            </table>
        </div>

    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        const tipoDeBusca = document.querySelector("#escolaridade");
        const serieSelect = document.querySelector("#serie");

        function inserirNoSelect(select, quantidade) {
            for (let i = 1; i <= quantidade; i++) {
                let option = document.createElement("option");
                option.value = i;
                option.textContent = `${i}° Ano`;
                serieSelect.appendChild(option);
            }
        }

        escolaridadeSelect.addEventListener("change", (event) => {
            serieSelect.innerHTML = "";

            if (event.target.value === "fundamental") {
                inserirNoSelect(serieSelect, 9);
            } else if (event.target.value === "medio") {
                inserirNoSelect(serieSelect, 3);
            }
        });

        inserirNoSelect(serieSelect, 9);
    </script>
</body>

</html>