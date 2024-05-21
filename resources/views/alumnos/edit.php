<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
</head>
<body>
    <h1>Editar alumno</h1>
    <form action="/alumnos/<?= $alumno['ID'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="Nombre" value="<?= $alumno['Nombre'] ?>">
        <input type="text" name="Apellidos" value="<?= $alumno['Apellidos'] ?>">
        <input type="text" name="Fecha_Nacimiento" value="<?= $alumno['Fecha_Nacimiento'] ?>">
        <input type="text" name="Semestre" value="<?= $alumno['Semestre'] ?>">
        <input type="text" name="Carrera" value="<?= $alumno['Carrera'] ?>">
        <input type="text" name="IdGrupo" value="<?= $alumno['IdGrupo'] ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

