<?php include_once '../resources/views/assets/tags.php'; ?>
<?php openHtml('Calificaciones'); ?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Calificaciones</h1>
    <form action="/calificaciones" method="get">
        <a href="/calificaciones" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
            <i class="fa-solid fa-rotate-right"></i>
        </a>
        <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3 mr-4" placeholder="Buscar por expediente...">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
    </form>

    <table class="consultas --mas-grande">
        <tr>
            <th>Expediente</th>
            <th>Nombre</th>
            <th>Grupo</th>

        </tr>

        <?php foreach ($alumnos as $alumno) : ?>
            <tr>
                <td><a href="/calificaciones/<?= $alumno['ID'] ?>" class="text-blue-500 hover:text-blue-700"><?= $alumno['ID'] ?></a></td>
                <td><?= $alumno['Nombre'] . ' ' . $alumno['Apellidos'] ?></td>
                <td><?= $alumno['IdGrupo'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


</div>
<?php closeHtml(); ?>

