<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega el enlace a la hoja de estilo de Bootstrap y Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">Bienvenido al login de prueba!.</h4>
                                    </div>

                                    <!-- Modifica el formulario según el nuevo diseño -->
                                    <form action="" method="post" class="login-form">
                                        <h2>Iniciar sesión</h2>

                                        <?php if (!empty($errors)): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php foreach ($errors as $error): ?>
                                                        <li><?php echo $error; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>

                                        <p>Por favor, ingrese usuario y contraseña</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example11" class="form-control" name="username" required placeholder="" />
                                            <label class="form-label" for="form2Example11">Usuario</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <div class="input-group">
                                                <input type="password" id="form2Example22" class="form-control" name="password" required />
                                                <span class="input-group-text">
                                                    <i class="fas fa-eye" id="togglePassword"></i>
                                                </span>
                                            </div>
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login">Ingresar</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                                            <a href="register" class="btn btn-outline-danger">Crear cuenta</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Somos más que una simple empresa</h4>
                                    <p class="small mb-0">Somos una fuerza impulsora de innovación y excelencia,
                                        trascendiendo los límites convencionales de una empresa. Nos definimos por nuestra pasión inquebrantable por desafiar el status quo y crear 
                                        un impacto significativo. En nuestro núcleo, no solo ofrecemos productos o servicios, sino una experiencia 
                                        transformadora que va más allá de las expectativas. Guiados por una visión audaz, forjamos conexiones duraderas y construimos
                                        un legado de éxito sostenible. Somos el motor de cambio, la diferencia que eleva nuestra presencia más allá de lo común.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agrega el script de Bootstrap y cualquier otro script necesario -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Agrega el script para alternar la visibilidad de la contraseña -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('form2Example22');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>
</body>
</html>
