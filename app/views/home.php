<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoCovid | Página Inicial</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<header>
    <div class="container mt-5">
        <h1 class="text-center">Bem-vindo à InfoCovid!</h1>
    </div>
</header>

<main>
    <div class="container text-center mt-4">
        <p>Escolha um país para saber informações detalhadas sobre:</p>

        <div class="btn-group" role="group" aria-label="Navegação por países">
            <div>
                <a href="brazil">
                    <img src="https://www.worldometers.info/img/flags/br-flag.gif" alt="Bandeira do Brasil"
                         class="country-image" height="64" width="64">
                </a>
            </div>

            <div class="mx-3">
                <a href="canada">
                    <img src="https://www.worldometers.info/img/flags/ca-flag.gif" alt="Bandeira do Canadá"
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

<footer class="mt-5 bg-light text-center py-3">
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
