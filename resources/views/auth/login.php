<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Iniciar sesión</title>
    <script src='https://kit.fontawesome.com/cf7ee57364.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0' />
    <link rel='stylesheet' href='../css/style.css'>
</head>

<body onload='mostrarTiempo();'>
    <div class='contenedorPrincipal'>
        <header class="header">
            <img src="../img/logo.png" alt="Logo" class="header_img">
            <p class="header_p">Colegio de Estudios Científicos y Tecnológicos del Estado de Querétaro</p>
        </header>
        <main class="main --centered">
        <div class='login-card'>
            <div class='login-card-logo'>
                <img src='../img/logo.png' alt='logo'>
            </div>
            <div class='login-card-header'>
                <h1>Iniciar sesión</h1>
                <div>Por favor, ingresa para usar la plataforma.</div>
            </div>
            <form class='login-card-form' method='post' action='/login'>
                <div class='form-item'>
                    <span class='form-item-icon material-symbols-rounded'>person</span>
                    <input type='text' placeholder='Tu login' name='Login' 
                    autofocus required>
                </div>
                <div class='form-item'>
                    <span class='form-item-icon material-symbols-rounded'>lock</span>
                    <input type='password' placeholder='Tu password' name='Password' required>
                </div>
                <button type='submit'>Entrar</button>
            </form>
        </div>
        </main>
        <footer class="footer">
            <p>Felipe Industries, 2024</p>
        </footer>
    </div>
</body>
</html>

