<?php include '../resources/views/assets/tags.php'; ?>
<?php openHtml('Calificaciones'); ?>
<div class="bloque">
    <form action="/calificaciones/<?=$completeData['data']['ID_Alumno'] ?>/edit/<?=$completeData['data']['id'] ?>" method="post" class="formulario --modificaciones">
        <h1 class="text-3xl font-bold mb-2">Editar calificación</h1>
        <p>Edita los campos de la calificación.</p>
        <table>
            <tr>
                <td>Alumno:</td>
                <td><?=$completeData['Nombre_Alumno'] ?></td>
            </tr>
            <tr>
                <td>Grupo:</td>
                <td><?=$completeData['data']['IdGrupo'] ?></td>
            </tr>
            <tr>
                <td>Materia:</td>
                <td>
                    <select name="ID_Materia">
                        <option selected value="<?=$completeData['data']['ID_Materia'] ?>"><?=$completeData['ActualMateria'] ?></option>
                        <?php foreach ($completeData['Materias'] as $materia) : ?>
                            <option value="<?=$materia['ID'] ?>" <?= $materia['ID'] == $completeData['data']['ID_Materia'] ? 'selected' : '' ?>><?=$materia['Materia'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Calificación (10 máx):</td>
                <td><input type="text" name="Calificacion" value="<?=$completeData['data']['Calificacion'] ?>"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Guardar" class="boton --aceptar">
            
            <a href="/calificaciones/<?=$completeData['data']['ID_Alumno']?>" class="boton --cancelar">Cancelar</a>
            
        </div>
    </form>
    <form action="/calificaciones/<?=$completeData['data']['ID_Alumno']?>/delete/<?=$completeData['data']['id']?>" method="post">
                <input type="submit" value="Borrar calificación" class="boton --cancelar">
            </form>
</div>
<?php closeHtml(); ?>