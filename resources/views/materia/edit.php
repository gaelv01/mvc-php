<?php include '../resources/views/assets/tags.php' ?>
<?php openHTML("Editar materia") ?>
<div class="bloque">
    
    <form action="/materias/<?= $materia['ID'] ?>" method="post" class="formulario --modificaciones">
    <h1 class="text-3xl font-bold mb-2">Editar materia</h1>
    <p>Edita los campos de la materia.</p>
    <table>
        <tr>
            <td>
                <label for="Materia">Materia:</label>
            </td>
            <td>
                <input type="text" name="Materia" value="<?= $materia['Materia'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="Semestre">Semestre:</label>
            </td>
            <td>
                <input type="text" name="Semestre" value="<?= $materia['Semestre'] ?>">
            </td>
        </tr>
    </table>
    <div class="contenedor-botones">
        <input type="submit" value="Guardar" class="boton --aceptar">
        <a href="/materias" class="boton --cancelar">Cancelar</a>
    </div>
    </form>
</div>
<?php closeHTML() ?>