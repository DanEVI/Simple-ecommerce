<?php

require_once "../includes/funciones.php";

$funciones = new Funciones();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['email'];
    $contra = $_POST['contra'];


    if ($funciones->registrarUsuario($nombre, $apellido, $usuario, $contra)) {
        session_start();
        echo "<script>alert('Usuario agregado correctamente'); window.location='index.php';</script>";
    } else {
        echo "Error al registrar";
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
                                        <img class="img-fluid rounded p-1" src="img/img1.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form method="POST">
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <span class="h1 fw-bold mb-0">Registrar usuario</span>
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-2" style="letter-spacing: 1px">
                                                Inicia sesión con tu cuenta
                                            </h5>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <!-- Cambié la clase a mb-3 -->
                                                    <div class="form-outline">
                                                        <label class="form-label fs-4" for="form2Example17">Nombre</label>
                                                        <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="Ingrese su nombre" name="nombre" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <!-- Cambié la clase a mb-3 -->
                                                    <div class="form-outline">
                                                        <label class="form-label fs-4" for="form2Example17">Apellido</label>
                                                        <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="Ingrese su apellido" name="apellido" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label fs-4" for="form2Example17">Correo
                                                    electrónico</label>
                                                <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Ingrese su correo" name="email" />
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label fs-4" for="form2Example27">Contraseña</label>
                                                <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Maximo 12 carácteres" maxlength="12" name="contra" />
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Registrar" />
                                            </div>

                                            <div class="pt-1">
                                                <p class="pb-lg-2 fs-5 mb-0">
                                                    <a href="index.php">Regresar</a>
                                                </p>
                                            </div>
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