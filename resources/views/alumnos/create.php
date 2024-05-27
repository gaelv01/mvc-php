<?php 
include '../resources/views/assets/tags.php';
openHTML("Crear alumno");
?>    
<div class="bloque">
    <form action="/alumnos" method="post" class="formulario --altas">
    <h1 class="text-3xl font-bold mb-2">Crear alumno</h1>
    <p>Rellena los campos para dar de alta a un alumno.</p>
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
                <td>Fecha de nac.:</td>
                <td><input type="date" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento"></td>
            </tr>
            <tr>
                <td>Semestre:</td>
                <td><input type="text" name="Semestre" placeholder="Semestre"></td>
            </tr>
            <tr>
                <td>Carrera:</td>
                <td><input type="text" name="Carrera" placeholder="Carrera"></td>
            </tr>
            <tr>
                <td>Grupo:</td>
                <td><input type="text" name="IdGrupo" placeholder="Grupo"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Crear" class='boton --aceptar'>  
            <a href="/alumnos" class='boton --cancelar'>Volver</a>
        </div>
        
    </form>
</div>
<?php closeHTML() ?>

