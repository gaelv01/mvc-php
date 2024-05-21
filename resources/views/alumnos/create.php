<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear alumno</title>
</head>
<body>
    <h1>Crear alumno</h1>
    <form action="/alumnos" method="post">
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="text" name="Apellidos" placeholder="Apellidos">
        <input type="date" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento">
        <input type="text" name="Semestre" placeholder="Semestre">
        <input type="text" name="Carrera" placeholder="Carrera">
        <input type="text" name="IdGrupo" placeholder="Grupo">
        <input type="submit" value="Crear">  
    </form>
</body>
</html>

