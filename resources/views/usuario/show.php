<?php include '../resources/views/assets/tags.php';
openHTML('Detalle de usuario');
?>
<div class="bloque --blanco">
    <h1 class="text-2xl font-bold mb-2">Detalle de usuario</h1>
    <ul class="list-none bg-blue-100 p-4 rounded-lg">
        <li>Nombre: <?= $usuario['Nombre'] ?></li>
        <li>Login: <?= $usuario['Login'] ?></li>
        <li>Password: <?= $usuario['Password'] ?></li>
        <li>Tipo: <?= $usuario['Tipo'] ?></li>
    </ul>
    <form action="/usuarios/<?= $usuario['ID'] ?>/delete" method="post" class="contenedor-botones">
    <a href="/usuarios/<?= $usuario['ID'] ?>/edit" class="boton --consultas"><i class="fa-solid fa-pencil mr-2"></i>Editar</a>
        <button type="submit" class="boton --cancelar"><i class="fa-solid fa-trash mr-2"></i>Eliminar</button>
        <a href="/usuarios" class="boton --cancelar"><i class="fa-solid fa-arrow-left mr-2"></i>Volver</a>
    </form> 
</div>
<?php closeHTML(); ?>


