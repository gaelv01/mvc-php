<?php include '../resources/views/assets/tags.php'; ?>
<?php openHTML('Detalle del profesor'); ?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Detalle del profesor</h1>
    <ul class="list-none bg-blue-100 p-4 rounded-lg">
        <li>Nombre: <?= $profesor['Nombre'] ?></li>
        <li>Apellidos: <?= $profesor['Apellidos'] ?></li>
        <li>Fecha de nacimiento: <?= $profesor['Fecha_Nacimiento'] ?></li>
        <li>Grupo: <?= $profesor['IdGrupo'] ?></li>
    </ul>   
    <form action="/profesores/<?= $profesor['ID'] ?>/delete" method="post" class="contenedor-botones">
        <a href="/profesores/<?= $profesor['ID'] ?>/edit" class="boton --consultas"><i class="fa-solid fa-pencil mr-2"></i>Editar</a>
        <button type="submit" class="boton --cancelar"><i class="fa-solid fa-trash mr-2"></i>Eliminar</button>
        <a href="/profesores" class="boton --cancelar"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
    </form>
</div>
<?php closeHTML(); ?>

