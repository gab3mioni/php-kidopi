<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoCovid | Brazil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <header>
        <div class="container">
            <h1 class="text-center">Bem-vindo à InfoCovid!</h1>
        </div>
    </header>

    <main>
        <div class="container text-center mt-4">
            <p>Escolha um país para saber mais:</p>

            <div class="btn-group" role="group" aria-label="Navegação por países">
                <div class="">
                    <a href="brazil">
                        <img src="https://www.worldometers.info/img/flags/br-flag.gif" alt="Bandeira do Brasil"
                             class="country-image" height="64" width="64">
                    </a>
                </div>

                <div class="mx-3">
                    <a href="canada">
                        <img src="https://www.worldometers.info/img/flags/ca-flag.gif" alt="Bandeira dos Canadá"
                             class="country-image" height="64" width="64">
                    </a>
                </div>

                <div>
                    <a href="australia">
                        <img src="https://www.worldometers.info/img/flags/as-flag.gif" alt="Bandeira da Austrália"
                             class="country-image" height="64" width="64">
                    </a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <p class="text-center">Para comparar a taxa de mortalidade de outros países:</p>

            <div class="d-flex justify-content-center">
                <button id="toggleFormButton" class="btn btn-primary">
                    Comparar países
                </button>
            </div>

            <div id="compareForm" class="mx-auto p-3 border rounded bg-white"
                 style="display: none; width: 50%; margin-top: 20px;">
                <form action="covidCompare" method="POST" class="mt-4">
                    <div class="form-group">
                        <label for="country1">Selecione o primeiro país:</label>
                        <select name="country1" id="country1" class="form-control" required>
                            <option value="">Escolha um país</option>
                            <?php foreach ($countries as $country): ?>
                                <option value="<?= htmlspecialchars($country) ?>">
                                    <?= htmlspecialchars($country) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country2">Selecione o segundo país:</label>
                        <select name="country2" id="country2" class="form-control" required>
                            <option value="">Escolha um país</option>
                            <?php foreach ($countries as $country): ?>
                                <option value="<?= htmlspecialchars($country) ?>">
                                    <?= htmlspecialchars($country) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Comparar</button>
                </form>
            </div>
        </div>
    </main>

    <div class="row my-4">
        <div class="col-md-6">
            <div class="card border-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Casos Confirmados</h5>
                    <p class="card-text text-danger fw-bold fs-4"><?= $totalCases ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Mortes</h5>
                    <p class="card-text text-dark fw-bold fs-4"><?= $totalDeaths ?></p>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-hover table-bordered">
        <thead class="table-dark">
        <tr>
            <th scope="col">Estado</th>
            <th scope="col">Casos confirmados</th>
            <th scope="col">Morte</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($statesData as $state): ?>
            <tr>
                <td><?= htmlspecialchars($state['state']) ?></td>
                <td><?= htmlspecialchars($state['cases']) ?></td>
                <td><?= htmlspecialchars($state['deaths']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<footer class="mt-auto bg-light text-center py-3">
    <?php if (!empty($lastApiCall)): ?>
        <p>Último país acessado: <?= htmlspecialchars($lastApiCall['country']) ?>
            em <?= htmlspecialchars($lastApiCall['created_at']) ?></p>
    <?php else: ?>
        <p>Nenhum registro anterior.</p>
    <?php endif; ?>
</footer>

<script src="js/compare.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
