<?php include '../resources/views/assets/tags.php';
openHTML("Detalle de la materia")
?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Detalle de la materia</h1>
    <ul class="list-none bg-blue-100 p-4 rounded-lg">
        <li><span class="font-bold">ID:</span> <?= $materia['ID'] ?></li>
        <li><span class="font-bold">Materia:</span> <?= $materia['Materia'] ?></li>
        <li><span class="font-bold">Semestre:</span> <?= $materia['Semestre'] ?></li>
    </ul>
    <form action="/materias/<?= $materia['ID'] ?>/delete" method="post" class="contenedor-botones">
    <a href="/materias/<?= $materia['ID'] ?>/edit" class="boton --consultas"><i class="fa-solid fa-pencil mr-2"></i>Editar</a>
    <button type="submit" class="boton --cancelar"><i class="fa-solid fa-trash mr-2"></i>Eliminar</button>
    <a href="/materias" class="boton --cancelar"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
    </form>
</div>
<?php closeHTML() ?>