<?php 
include "../resources/views/assets/tags.php";
openHTML("Alumnos");
?>
    <div class="bloque --blanco">
        <h1 class="text-3xl font-bold mb-2">Listado de alumnos</h1>
        
        <form action="/alumnos" method="get">
            <a href="/alumnos" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
            <i class="fa-solid fa-rotate-right"></i>
            </a>
            <input type="text" name="search" class="bg-white-500 border-2 border-gray-300 rounded-lg p-2 mb-3 mr-4" placeholder="Buscar...">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
        </form>
        <table class="consultas --mas-grande">
            <tr>
                <th>Expediente</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th>Semestre</th>
                <th>Carrera</th>
                <th>Grupo</th>
            </tr>
            <?php foreach ($alumnos as $alumno) : ?>
                <tr>
                    <td><?= $alumno['ID'] ?></td>
                    <td><a href="/alumnos/<?= $alumno['ID'] ?>" class="text-blue-500 hover:text-blue-700"><?= $alumno['Nombre'] ?></a></td>
                    <td><?= $alumno['Apellidos'] ?></td>
                    <td><?= $alumno['Fecha_Nacimiento'] ?></td>
                    <td><?= $alumno['Semestre'] ?></td>
                    <td><?= $alumno['Carrera'] ?></td>
                    <td><?= $alumno['IdGrupo'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="/alumnos/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear alumno</a>


    </div>
<?php
closeHTML();