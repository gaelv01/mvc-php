<?php include '../resources/views/assets/tags.php'; ?>
<?php openHtml('Calificaciones'); ?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Calificaciones de <?= $data['Nombre_Alumno'] ?></h1>

    <table class="consultas --mas-grande">
        <tr>
            <th>Materia</th>
            <th>Calificación</th>
        </tr>
        <?php foreach ($data['calificaciones'] as $calificacion) : ?>
            <tr>
                <td><a href="/calificaciones/<?= $data['id'] ?>/edit/<?= $calificacion['id'] ?>"><?= $calificacion['Materia'] ?></a></td>
                <td><?= $calificacion['Calificacion'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="/calificaciones/<?= $data['id'] ?>/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar calificación</a>
    <a href="/calificaciones" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Volver</a>
</div>
<?php closeHtml(); ?>

