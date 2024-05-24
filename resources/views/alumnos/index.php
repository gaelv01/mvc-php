<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-2">Listado de alumnos</h1>


        <form action="/alumnos" method="get">
            <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3" placeholder="Buscar...">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
        </form>

        <a href="/alumnos/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear alumno</a>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th>Semestre</th>
                <th>Carrera</th>
                <th>Grupo</th>
            </tr>
            <?php foreach ($alumnos['data'] as $alumno) : ?>
                <tr>
                    <td><a href="/alumnos/<?= $alumno['ID'] ?>" class="text-blue-500 hover:text-blue-700"><?= $alumno['Nombre'] ?></a></td>
                    <td><?= $alumno['Apellidos'] ?></td>
                    <td><?= $alumno['Fecha_Nacimiento'] ?></td>
                    <td><?= $alumno['Semestre'] ?></td>
                    <td><?= $alumno['Carrera'] ?></td>
                    <td><?= $alumno['IdGrupo'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>


        <?php
        $paginate = 'alumnos';
        require_once '../resources/views/assets/pagination.php';
        ?>

    </div>


</body>

</html>