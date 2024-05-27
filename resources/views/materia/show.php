<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar materia</title>
</head>
<body>
    <h1>Detalle de la materia</h1>
    <p>ID: <?= $materia['ID'] ?></p>
    <p>Materia: <?= $materia['Materia'] ?></p>
    <p>Semestre: <?= $materia['Semestre'] ?></p>
    <a href="/materias/<?= $materia['ID'] ?>/edit">Editar</a>

    <form action="/materias/<?= $materia['ID'] ?>/delete" method="post">
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>

