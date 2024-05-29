<?php include '../resources/views/assets/tags.php'; ?>
<?php openHtml('Grupos'); ?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Grupos</h1>
    <form action="/grupos" method="get">
        <a href="/grupos" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
            <i class="fa-solid fa-rotate-right"></i>
        </a>
        <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3 mr-4" placeholder="Buscar...">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
    </form>
    <table class="consultas --mas-grande">
        <tr>
            <th>Grupo</th>
            <th>Materia</th>
            <th>Profesor</th>
            <th>Semestre</th>
        </tr>
        <?php foreach ($grupos as $grupo) : ?>
            <tr>
                <td><a href="/grupos/<?= $grupo['ID'] ?>" class="text-blue-500 hover:text-blue-700"><?= $grupo['IdGrupo']?></a></td>
                <td><?= $grupo['ID_Materia'] ?></td>
                <td><?= $grupo['ID_Profesor'] ?></td>
                <td><?= $grupo['Semestre'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>                                                                                                                    
    <a href="/grupos/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear grupo</a>

</div>

<?php closeHtml(); ?>

