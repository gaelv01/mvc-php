<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>CECYTEQ</title>
    <link rel='stylesheet' href='../assets/css/signin.css'>

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/brands.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/solid.css">

</head>

<body onload='mostrarTiempo();'>
<body class="text-center">
  <main class="form-signin">
    <form class="needs-validation" novalidate>
      <img class="mb-4" src="../assets/img/logo.png" alt="logo" width="130">
      <h1 class="h3 mb-3 fw-normal">¡Bienvenido!</h1>
      <h2 class="h5 mb-3 fw-light">Inicia sesión</h2>
  
      <div class="form-floating mb-3">
        <input name="Login" type="text" class="form-control" id="floatingInput" placeholder="Usuario" required>
        <label for="floatingInput"> <i class="fa fa-user mx-2" aria-hidden="true"></i> Usuario</label>
        <div class="invalid-feedback">
          Por favor, ingresa un usuario válido.
        </div>
      </div>
      <div class="form-floating mb-3">
        <input name="Password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword"> <i class="fa fa-lock mx-2" aria-hidden="true"></i> Password</label>
        <div class="invalid-feedback">
          Por favor, ingresa tu contraseña.
        </div>
      </div>
  
      <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
      <p class="mt-5 mb-3 text-muted">© Felipe Industries, 2024</p>
    </form>
  </main>

    <script src="/assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/form_validation.js"></script>

</body>
</html>

