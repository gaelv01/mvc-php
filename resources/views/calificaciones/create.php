<?php include '../resources/views/assets/tags.php'; ?>
<?php openHtml('Calificaciones'); ?>
<div class="bloque">

    <form action="/calificaciones/<?=$data['id']?>/store" method="post" class="formulario --altas">
        <h1 class="text-3xl font-bold mb-2">Agregar calificación</h1>
        <p>Rellena los campos para dar de alta una calificación.</p>
        <table>
            <tr>
                <td>Alumno:</td>
                <td><?= $data['Nombre_Alumno'] ?></td>
            </tr>
            <tr>
                <td>Grupo:</td>
                <td><?= $data['Grupo'] ?></td>
            </tr>
            <tr>
                <td>Materia:</td>
                <td>
                    <select name="ID_Materia">
                        <?php foreach ($data['Materias'] as $materia) : ?>
                            <option value="<?= $materia['ID'] ?>"><?= $materia['Materia'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Calificación (10 máx):</td>
                <td><input type="text" name="Calificacion" placeholder="Calificación"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <button type="submit" class="boton --aceptar">Guardar</button>
            <a href="/calificaciones/<?=$data['id']?>" class="boton --cancelar">Volver</a>

        </div>
    </form>


</div>
<?php closeHtml(); ?>