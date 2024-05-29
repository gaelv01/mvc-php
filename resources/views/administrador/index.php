<?php
include '../resources/views/assets/tags.php';
openHTML('Listado de administradores');
?>
<div class="bloque --blanco">
    <h1 class="text-2xl font-bold mb-2">Listado de administradores</h1>


    <form action="/admin" method="get">
        <a href="/admin" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
        <i class="fa-solid fa-rotate-right"></i>
        </a>
        <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3" placeholder="Buscar...">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
    </form>


    <table class="consultas --mas-grande">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Cargo</th>

        </tr>
        <?php foreach ($administradores as $administrador) : ?>
            <tr>
                <td><a href="/admin/<?= $administrador['ID'] ?>"  class="text-blue-500 hover:text-blue-700"><?= $administrador['Nombre'] ?></a></td>
                <td><?= $administrador['Apellido'] ?></td>
                <td><?= $administrador['Cargo'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/admin/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear administrador</a>

    

</div>

<?php
closeHTML();
?>