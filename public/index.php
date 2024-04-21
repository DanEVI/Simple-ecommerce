<?php
require_once "../includes/funciones.php";

$funciones = new Funciones();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['email']; // Cambia 'usuario' por el nombre del campo de correo electrónico en tu formulario
    $contra = $_POST['pass']; // Cambia 'contraseña' por el nombre del campo de contraseña en tu formulario

    if ($funciones->verificarUsuario($usuario, $contra)) {
        session_start();
        echo "Inicio de sesión exitoso";
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main>
        <section id="view-complete" class="vh-100 background">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="view-complete col col-xl-11">
                        <div class="card" style="border-radius: 1rem">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-md-block align-self-center text-align-center">
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                        <img class="img-fluid rounded p-1" src="img/img2.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form method="POST">
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <span class="h1 fw-bold mb-0">Inicio de sesión</span>
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-2" style="letter-spacing: 1px">
                                                Inicia sesión con tu cuenta
                                            </h5>

                                            <div class="form-outline mb-4">
                                                <label class="form-label fs-4" for="form2Example17">Correo electronico</label>
                                                <input type="email" id="email" placeholder="Ingrese su correo" class="form-control form-control-lg" name="email" required />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label fs-4" for="form2Example27">Contraseña</label>
                                                <input type="password" id="pass" class="form-control form-control-lg" placeholder="Ingrese su contraseña" maxlength="12" name="pass" required />
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <input class="btn btn-primary btn-lg btn-block" type="submit">
                                            </div>

                                            <p class="small text-black m-0 fs-5">
                                                ¿No tiene cuenta?
                                            </p>
                                            <p class="mb-5 pb-lg-2 fs-5">
                                                <a href="register.php">Crear cuenta</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>