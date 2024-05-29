<?php include '../resources/views/assets/tags.php';
openHTML("Crear grupo");
?>
<div class="bloque">
    <form action="/grupos" method="post" class="formulario --altas">
        <h1 class="text-3xl font-bold mb-2">Crear grupo</h1>
        <p>Rellena los campos para dar de alta un grupo.</p>
        <table>
            <tr>
                <td>Grupo:</td>
                <td><input type="text" name="IdGrupo" placeholder="Grupo"></td>
            </tr>
            <tr>
                <td>Materia:</td>
                <td><input type="text" name="ID_Materia" placeholder="Materia"></td>
            </tr>
            <tr>
                <td>Profesor:</td>
                <td><input type="text" name="ID_Profesor" placeholder="Profesor"></td>
            </tr>
            <tr>
                <td>Semestre:</td>
                <td><input type="text" name="Semestre" placeholder="Semestre"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Crear" class="boton --aceptar">
            <a href="/grupos" class='boton --cancelar'>Volver</a>
        </div>
    </form>
</div>
<?php closeHTML() ?>