<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar administrador</title>
</head>
<body>
    <h1>Detalle del administrador</h1>
    <p>Nombre: <?= $administrador['Nombre'] ?></p>
    <p>Apellidos: <?= $administrador['Apellido'] ?></p>
    <p>Cargo: <?= $administrador['Cargo'] ?></p>
   <a href="/admin/<?= $administrador['ID'] ?>/edit">Editar</a>

    <form action="/admin/<?= $administrador['ID'] ?>/delete" method="post">
        <button type="submit">Eliminar</button>
    </form> 
</body>
</html>

