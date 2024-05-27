<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-2">Listado de materias</h1>


        <form action="/materias" method="get">
            <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3" placeholder="Buscar...">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
        </form>

        <a href="/materias/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear materia</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th>Semestre</th>
            </tr>
            <?php foreach ($materias['data'] as $materia) : ?>
                <tr>
                    <td><?= $materia['ID'] ?></td>
                    <td><a href="/materias/<?= $materia['ID'] ?>" class="text-blue-500 hover:text-blue-700"><?= $materia['Materia'] ?></a></td>
                    <td><?= $materia['Semestre'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>


        <?php
        $paginate = 'materias';
        require_once '../resources/views/assets/pagination.php';
        ?>

    </div>


</body>

</html>