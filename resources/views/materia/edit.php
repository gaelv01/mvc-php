<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar materia</title>
</head>
<body>
    <h1>Editar materia</h1>
    <form action="/materias/<?= $materia['ID'] ?>" method="post">
        <label for="Materia">Materia:</label>
        <input type="text" name="Materia" value="<?= $materia['Materia'] ?>">
        <label for="Semestre">Semestre:</label>
        <input type="text" name="Semestre" value="<?= $materia['Semestre'] ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

