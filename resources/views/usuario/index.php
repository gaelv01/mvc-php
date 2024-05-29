<?php include '../resources/views/assets/tags.php';
openHTML('Listado de usuarios');
?>
<div class="bloque --blanco">
    <h1 class="text-2xl font-bold mb-2">Listado de usuarios</h1>
    <form action="/usuarios" method="get">
        <a href="/usuarios" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
        <i class="fa-solid fa-rotate-right"></i>
        </a>
        <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3" placeholder="Buscar...">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
    </form>

    <table class="consultas --mas-grande">
        <tr>
            <th>Nombre</th>
            <th>Login</th>
            <th>Password</th>
            <th>Tipo</th>
        </tr>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><a href="/usuarios/<?= $usuario['ID'] ?>"  class="text-blue-500 hover:text-blue-700"><?= $usuario['Nombre'] ?></a></td>
                <td><?= $usuario['Login'] ?></td>
                <td><?= $usuario['Password'] ?></td>
                <td><?= $usuario['Tipo'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="/usuarios/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear usuario</a>
</div>
<?php closeHTML(); ?>
