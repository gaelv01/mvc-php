<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-2">Listado de administradores</h1>


        <form action="/admin" method="get">
            <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3" placeholder="Buscar...">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
        </form>

        <a href="/admin/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear administrador</a>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Cargo</th>

            </tr>
            <?php foreach ($administradores['data'] as $administrador) : ?>
                <tr>
                    <td><a href="/admin/<?=$administrador['ID']?>"><?=$administrador['Nombre']?></a></td>
                    <td><?=$administrador['Apellido']?></td>
                    <td><?=$administrador['Cargo']?></td>
                </tr>
            <?php endforeach; ?>
        </table>


        <?php
        $paginate = 'administradores';
        require_once '../resources/views/assets/pagination.php';
        ?>

    </div>


</body>

</html>