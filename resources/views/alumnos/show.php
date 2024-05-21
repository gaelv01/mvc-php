<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>
<body>
    <h1>Detalle del alumno</h1>
    <p>Nombre: <?= $alumno['Nombre'] ?></p>
    <p>Apellidos: <?= $alumno['Apellidos'] ?></p>
    <p>Fecha de nacimiento: <?= $alumno['Fecha_Nacimiento'] ?></p>
    <p>Semestre: <?= $alumno['Semestre'] ?></p>
    <p>Carrera: <?= $alumno['Carrera'] ?></p>
    <p>Grupo: <?= $alumno['IdGrupo'] ?></p>
    <a href="/alumnos/<?= $alumno['ID'] ?>/edit">Editar</a>

    <form action="/alumnos/<?= $alumno['ID'] ?>/delete" method="post">
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>

