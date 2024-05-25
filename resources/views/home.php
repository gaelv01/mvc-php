<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inicio</title>
    <script src='https://kit.fontawesome.com/cf7ee57364.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0' />
    <script type='text/javascript' language='JavaScript' src='../js/reloj.js'></script>
    <script type='text/javascript' language='JavaScript' src='js/funciones.js'></script>
    <link rel='stylesheet' href='css/styles.css'>
</head>

<body onload='mostrarTiempo();'>
    <div class='contenedorPrincipal'>

        <header class="header">
            <img src="img/logo.png" alt="Logo" class="header_img">
            <p class="header_p">Colegio de Estudios Científicos y Tecnológicos del Estado de Querétaro</p>
            <span id="tiempo"></span>
        </header>
        <main class="main --default">

            <ul class="menu__lista-princ">
                <li class="menu__opcion"><a href="main_panel.php" class="menu__link --inicio"><i class="fa-sharp fa-solid fa-home" style="font-size: var(--tamano-2); padding-right: var(--tamano-med);"></i>Inicio</a></li>

                <li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-bus" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Camiones</a>
                    <ul class="submenu__opcion"><a href="../src/addBus.php" class="menu__link">Alta</a></ul>
                    <ul class="submenu__opcion"><a href="../src/deleteBus.php" class="menu__link">Baja</a></ul>
                    <ul class="submenu__opcion"><a href="../src/modifyBus.php" class="menu__link">Modificar</a></ul>
                    <ul class="submenu__opcion"><a href="../src/viewBus.php" class="menu__link">Consultar</a></ul>
                </li>

                <li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-id-card-clip" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Conductores</a>
                    <ul class="submenu__opcion"><a href="../src/addDriver.php" class="menu__link">Alta</a></ul>
                    <ul class="submenu__opcion"><a href="../src/deleteDriver.php" class="menu__link">Baja</a></ul>
                    <ul class="submenu__opcion"><a href="../src/modifyDriver.php" class="menu__link">Modificar</a></ul>
                    <ul class="submenu__opcion"><a href="../src/viewDriver.php" class="menu__link">Consultar</a></ul>
                </li>

                <li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-route" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Rutas</a>
                    <ul class="submenu__opcion"><a href="../src/addRoute.php" class="menu__link">Alta</a></ul>
                    <ul class="submenu__opcion"><a href="../src/deleteRoute.php" class="menu__link">Baja</a></ul>
                    <ul class="submenu__opcion"><a href="../src/modifyRoute.php" class="menu__link">Modificar</a></ul>
                    <ul class="submenu__opcion"><a href="../src/viewRoutes.php" class="menu__link">Ver rutas</a></ul>
                </li>

                <li class="menu__opcion"><a href="" class="menu__link"><i class="fa-sharp fa-solid fa-crown" style="font-size: var(--tamano-1); padding-right: var(--tamano-med);"></i>Administradores</a>
                    <ul class="submenu__opcion"><a href="../src/addAdmin.php" class="menu__link">Alta</a></ul>
                    <ul class="submenu__opcion"><a href="../src/deleteAdmin	.php" class="menu__link">Baja</a></ul>
                    <ul class="submenu__opcion"><a href="../src/modifyAdmin.php" class="menu__link">Modificar</a></ul>
                    <ul class="submenu__opcion"><a href="../src/viewAdmin.php" class="menu__link">Consultar</a></ul>
                </li>

                <li class="menu__opcion"><a href="../util/logout.php" class="menu__link --cerrar">Cerrar sesión</a></li>
            </ul>
            <div class="area-trabajo">

                <div class='bloque-bienvenida'>
                    <h1>¡Bienvenido al sistema!</h1>
                    <p>Este sistema está diseñado para administrar y ayudar a controlar las entidades de estudio del CECyTEQ. Cuenta con un panel de administración para gestionar los datos de administradores, maestros, alumnos, entre muchas cosas.</p>
                    <p>Para comenzar, selecciona la opción de menú que deseas usar.</p>
                    <span class='icono'><img src='img/logo.png' width="100"></span>
                </div>
            </div>
        </main>
        <footer class="footer">
            <p>The CHaVeCORP Company, 2024</p>
        </footer>
    </div>
</body>
</html>