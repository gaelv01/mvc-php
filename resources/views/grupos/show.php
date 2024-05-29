<?php include '../resources/views/assets/tags.php';
openHTML('Detalle de grupo');
?>
<div class="bloque --blanco">
    <h1 class="text-2xl font-bold mb-2">Detalle de grupo</h1>
    <ul class="list-none bg-blue-100 p-4 rounded-lg">
        <li>Grupo: <?= $grupo['IdGrupo'] ?></li>
        <li>Materia: <?= $grupo['ID_Materia'] ?></li>
        <li>Profesor: <?= $grupo['ID_Profesor'] ?></li>
        <li>Semestre: <?= $grupo['Semestre'] ?></li>
    </ul>
    <form action="/grupos/<?= $grupo['ID'] ?>/delete" method="post" class="contenedor-botones">
    <a href="/grupos/<?= $grupo['ID'] ?>/edit" class="boton --consultas"><i class="fa-solid fa-pencil mr-2"></i>Editar</a>
        <button type="submit" class="boton --cancelar"><i class="fa-solid fa-trash mr-2"></i>Eliminar</button>
        <a href="/grupos" class="boton --cancelar"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
    </form> 
</div>
<?php closeHTML(); ?>


