<?php include '../resources/views/assets/tags.php';
openHTML('Crear usuario');
?>
<div class="bloque">
    <form action="/usuarios" method="post" class="formulario --altas">
        <h1 class="text-2xl font-bold mb-2">Crear usuario</h1>
        <p>Ingrese los datos para crear un usuario.</p>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="Nombre" placeholder="Nombre"></td>
            </tr>
            <tr>
                <td>Login:</td>
                <td><input type="text" name="Login" placeholder="Login"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="Password" placeholder="Password"></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="text" name="Tipo" placeholder="Tipo"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Crear" class="boton --aceptar">
            <a href="/usuarios" class="boton --cancelar">Volver</a>
        </div>
    </form>
</div>
<?php closeHTML(); ?>

