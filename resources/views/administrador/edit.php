<?php include '../resources/views/assets/tags.php'; ?>
<?php openHTML('Editar administrador'); ?>
<h1 class="text-3xl font-bold mb-2">Editar administrador</h1>
<div class="bloque">
    <form action="/admin/<?= $administrador['ID'] ?>" method="post" class="formulario --modificaciones">
    <h1 class="text-2xl font-bold mb-2">Datos del administrador</h1>
    <p>Editar los datos del administrador.</p>
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="Nombre" value="<?= $administrador['Nombre'] ?>"></td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td><input type="text" name="Apellido" value="<?= $administrador['Apellido'] ?>"></td>
        </tr>
        <tr>
            <td>Cargo:</td>
            <td><input type="text" name="Cargo" value="<?= $administrador['Cargo'] ?>"></td>
        </tr>
    </table>
    <div class="contenedor-botones">
        <input type="submit" value="Guardar" class="boton --aceptar">
        <a href="/admin" class="boton --cancelar">Volver</a>
    </div>
    </form>
</div>

<?php closeHTML(); ?>