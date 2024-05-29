<?php include '../resources/views/assets/tags.php'; ?>
<?php openHtml('Editar grupo'); ?>

<div class="bloque">
    <form action="/grupos/<?= $grupo['ID'] ?>" method="post" class="formulario --modificaciones">
        <h1 class="text-3xl font-bold mb-2">Editar grupo</h1>
        <p>Edita los campos del grupo.</p>
        <table>
            <tr>
                <td>Grupo:</td>
                <td><input type="text" name="IdGrupo" value="<?= $grupo['IdGrupo'] ?>"></td>
            </tr>
            <tr>
                <td>Materia:</td>
                <td><input type="text" name="ID_Materia" value="<?= $grupo['ID_Materia'] ?>"></td>
            </tr>
            <tr>
                <td>Profesor:</td>
                <td><input type="text" name="ID_Profesor" value="<?= $grupo['ID_Profesor'] ?>"></td>
            </tr>
            <tr>
                <td>Semestre:</td>
                <td><input type="text" name="Semestre" value="<?= $grupo['Semestre'] ?>"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Guardar" class="boton --aceptar">
            <a href="/grupos" class="boton --cancelar">Cancelar</a>
        </div>
    </form>
</div>

