<?php include '../resources/views/assets/tags.php';
openHTML('Crear administrador');
?>
<div class="bloque">
    <form action="/admin" method="post" class="formulario --altas">
    <h1 class="text-2xl font-bold">Crear administrador</h1>
    <p>Ingrese los datos para crear un administrador.</p>
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="Nombre" placeholder="Nombre"></td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td><input type="text" name="Apellido" placeholder="Apellido"></td>
        </tr>
        <tr>
            <td>Cargo:</td>
            <td><input type="text" name="Cargo" placeholder="Cargo"></td>
        </tr>
    </table>
        <div class="contenedor-botones">
            <input type="submit" value="Crear" class="boton --aceptar">
            <a href="/admin" class="boton --cancelar">Volver</a>
        </div> 
    </form>
</div>
<?php
closeHTML();

