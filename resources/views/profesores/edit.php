<?php include '../resources/views/assets/tags.php';
openHTML('Editar profesor');
?>
<div class="bloque">
    <form action="/profesores/<?= $profesor['ID'] ?>" method="post" class="formulario --modificaciones">
        <h1 class="text-2xl font-bold">Editar profesor</h1>
        <p>Ingrese los datos para editar un profesor.</p>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="Nombre" placeholder="Nombre" value="<?= $profesor['Nombre'] ?>"></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="Apellidos" placeholder="Apellidos" value="<?= $profesor['Apellidos'] ?>"></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:</td>
                <td><input type="date" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" value="<?= $profesor['Fecha_Nacimiento'] ?>"></td>
            </tr>
            <tr>
                <td>Grupo:</td>
                <td><input type="text" name="IdGrupo" placeholder="Grupo" value="<?= $profesor['IdGrupo'] ?>"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Guardar" class="boton --aceptar">
            <a href="/profesores" class="boton --cancelar">Volver</a>
    </form>
</div>
<?php closeHTML(); ?>

