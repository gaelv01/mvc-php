<?php include '../resources/views/assets/tags.php';
openHTML('Crear profesor');
?>
<div class="bloque">
    <form action="/profesores" method="post" class="formulario --altas">
        <h1 class="text-2xl font-bold">Crear profesor</h1>
        <p>Ingrese los datos para crear un profesor.</p>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="Nombre" placeholder="Nombre"></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="Apellidos" placeholder="Apellidos"></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:</td>
                <td><input type="date" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento"></td>
            </tr>
            <tr>
                <td>Grupo:</td>
                <td><input type="text" name="IdGrupo" placeholder="Grupo"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Crear" class="boton --aceptar">
            <a href="/profesores" class="boton --cancelar">Volver</a>
        </div>
    </form>
</div>
<?php closeHTML(); ?>

