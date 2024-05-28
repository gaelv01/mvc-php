<?php include '../resources/views/assets/tags.php';
openHTML("Crear materia");
?>
<div class="bloque">
    <form action="/materias" method="post" class="formulario --altas">
        <h1 class="text-3xl font-bold mb-2">Crear materia</h1>
        <p>Rellena los campos para dar de alta una materia.</p>
        <table>
            <tr>
                <td>Materia:</td>
                <td><input type="text" name="Materia" placeholder="Materia"></td>
            </tr>
            <tr>
                <td>Semestre:</td>
                <td><input type="text" name="Semestre" placeholder="Semestre"></td>
            </tr>
        </table>
        <div class="contenedor-botones">
            <input type="submit" value="Crear" class="boton --aceptar">
            <a href="/materias" class='boton --cancelar'>Volver</a>
        </div>

    </form>
</div>
<?php closeHTML() ?>