<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar administrador</title>
</head>
<body>
    <h1>Editar administrador</h1>
    <form action="/admin/<?= $administrador['ID'] ?>" method="post">
        <input type="text" name="Nombre" value="<?= $administrador['Nombre'] ?>">
        <input type="text" name="Apellido" value="<?= $administrador['Apellido'] ?>">
        <input type="text" name="Cargo" value="<?= $administrador['Cargo'] ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>

