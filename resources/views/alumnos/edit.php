<?php include '../resources/views/assets/tags.php' ?>
<?php openHTML("Editar alumno") ?>
   
    <div class="bloque">
        <form action="/alumnos/<?= $alumno['ID'] ?>" method="post" class="formulario --modificaciones">
        <h1 class="text-3xl font-bold mb-2">Editar alumno</h1>
        <p>Edita los campos del alumno.</p>
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="Nombre" value="<?= $alumno['Nombre'] ?>"></td>
                </tr>
                <tr>
                    <td>Apellidos:</td>
                    <td><input type="text" name="Apellidos" value="<?= $alumno['Apellidos'] ?>"></td>
                </tr>
                <tr>
                    <td>Fecha de nac.:</td>
                    <td><input type="text" name="Fecha_Nacimiento" value="<?= $alumno['Fecha_Nacimiento'] ?>"></td>
                </tr>
                <tr>
                    <td>Semestre:</td>
                    <td><input type="text" name="Semestre" value="<?= $alumno['Semestre'] ?>"></td>
                </tr>
                <tr>
                    <td>Carrera:</td>
                    <td><input type="text" name="Carrera" value="<?= $alumno['Carrera'] ?>"></td>
                </tr>
                <tr>
                    <td>Grupo:</td>
                    <td><input type="text" name="IdGrupo" value="<?= $alumno['IdGrupo'] ?>"></td>
                </tr>
            </table>
            <div class="contenedor-botones">
                <input type="submit" value="Guardar" class="boton --aceptar">
                <a href="/alumnos" class="boton --cancelar">Cancelar</a>
            </div>
            
        </form>
    </div>
<?php closeHTML() ?>
