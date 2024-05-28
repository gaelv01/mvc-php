<?php include '../resources/views/assets/tags.php'; ?>
<?php openHTML('Detalle del administrador'); ?>
<div class="bloque --blanco">
    <h1 class="text-3xl font-bold mb-2">Detalle del administrador</h1>
    <ul class="list-none bg-blue-100 p-4 rounded-lg">
        <li>Nombre: <?= $administrador['Nombre'] ?></li>
        <li>Apellidos: <?= $administrador['Apellido'] ?></li>
        <li>Cargo: <?= $administrador['Cargo'] ?></li>
    </ul>   
   

    <form action="/admin/<?= $administrador['ID'] ?>/delete" method="post" class="contenedor-botones">
    <a href="/admin/<?= $administrador['ID'] ?>/edit" class="boton --consultas"><i class="fa-solid fa-pencil mr-2"></i>Editar</a>
        <button type="submit" class="boton --cancelar"><i class="fa-solid fa-trash mr-2"></i>Eliminar</button>
        <a href="/admin" class="boton --cancelar"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
    </form> 
</div>
<?php closeHTML(); ?>
