<?php include '../resources/views/assets/tags.php';
openHTML('Detalle del alumno');
?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Detalle del alumno</h1>
    <ul class="list-none bg-blue-100 p-4 rounded-lg">
        <li><span class="font-bold">Nombre:</span> <?= $alumno['Nombre'] ?></li>
        <li><span class="font-bold">Apellidos:</span> <?= $alumno['Apellidos'] ?></li>
        <li><span class="font-bold">Fecha de nacimiento:</span> <?= $alumno['Fecha_Nacimiento'] ?></li>
        <li><span class="font-bold">Semestre:</span> <?= $alumno['Semestre'] ?></li>
        <li><span class="font-bold">Carrera:</span> <?= $alumno['Carrera'] ?></li>
        <li><span class="font-bold">Grupo:</span> <?= $alumno['IdGrupo'] ?></li>
    </ul>
    
    <form action="/alumnos/<?= $alumno['ID'] ?>/delete" method="post" class="contenedor-botones">
    
        <a href="/alumnos/<?= $alumno['ID'] ?>/edit" class="boton --consultas"><i class="fa-solid fa-pencil mr-2"></i>Editar</a>
        <button type="submit" class="boton --cancelar"><i class="fa-solid fa-trash mr-2"></i>Eliminar</button>
        <a href="/alumnos" class="boton --cancelar"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
    </form>
</div>
<?php closeHTML() ?>

