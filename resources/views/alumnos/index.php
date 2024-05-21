<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <h1>Listado de alumnos</h1>

    <a href="/alumnos/create">Crear alumno</a>
    
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th>Semestre</th>
            <th>Carrera</th>
            <th>Grupo</th>
        </tr>
        <?php foreach($alumnos as $alumno): ?>
            <tr>
                <td><a href="/alumnos/<?= $alumno['ID'] ?>"><?= $alumno['Nombre'] ?></a></td>
                <td><?= $alumno['Apellidos'] ?></td>
                <td><?= $alumno['Fecha_Nacimiento'] ?></td>
                <td><?= $alumno['Semestre'] ?></td>
                <td><?= $alumno['Carrera'] ?></td>
                <td><?= $alumno['IdGrupo'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

