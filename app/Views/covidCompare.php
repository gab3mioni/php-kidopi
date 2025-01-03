<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoCovid | Comparação</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="text-center mb-4">Resultado da Comparação</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title text-center">Países Selecionados</h5>
            <div class="row">
                <div class="col-md-6 text-center">
                    <h6><?= htmlspecialchars($country1) ?></h6>
                    <p class="text-primary">Taxa de Mortalidade: <strong><?= number_format($rate1 * 100, 2) ?>%</strong>
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <h6><?= htmlspecialchars($country2) ?></h6>
                    <p class="text-danger">Taxa de Mortalidade: <strong><?= number_format($rate2 * 100, 2) ?>%</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Diferença entre as Taxas</h5>
            <p class="text-success">
                <strong><?= number_format($difference * 100, 2) ?>%</strong>
            </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="home" class="btn btn-primary">Comparar Novamente</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
