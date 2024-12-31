<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Data - Austrália</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <header class="mb-4 text-center">
        <h1 class="text-primary">Covid Data - Austrália</h1>
        <p class="lead">Monitoramento dos casos de Covid-19 no Austrália</p>
    </header>

    <div class="row mb-4">
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

    <div class="text-center mt-4">
        <a href="home" class="btn btn-primary">Voltar para Home</a>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
