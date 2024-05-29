<?php include '../resources/views/assets/tags.php';
openHTML('Editar usuario');
?>
<div class="bloque">
    <form action="/usuarios/<?= $usuario['ID'] ?>" method="post" class="formulario --modificaciones">
        <h1 class="text-2xl font-bold mb-2">Editar usuario</h1>
        <p>Editar los datos del usuario.</p>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="Nombre" value="<?= $usuario['Nombre'] ?>"></td>
            </tr>
            <tr>
                <td>Login:</td>
                <td><input type="text" name="Login" value="<?= $usuario['Login'] ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="Password" value="<?= $usuario['Password'] ?>"></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="text" name="Tipo" value="<?= $usuario['Tipo'] ?>"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Editar" class="boton --aceptar">
            <a href="/usuarios" class="boton --cancelar">Volver</a>
        </div>
    </form>
</div>
<?php closeHTML(); ?>


