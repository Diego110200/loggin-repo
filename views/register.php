<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega el enlace a la hoja de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega el enlace a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Registro de usuario</title>
</head>
<body>
    <div class="container">
        <a href="/" class="btn btn-secondary float-left mt-1 mb-3">Volver</a>
        <form action="" method="post" class="register-form mt-5 p-4 border rounded">

            <h2 class="mb-4">Registro de usuario</h2>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <div class="input-group">
                    <input type="password" name="password" class="form-control" id="password" required>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fas fa-eye" id="togglePassword"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="apellido" name="apellido" class="form-control" required>
            </div>

            <button type="submit" name="register" class="btn btn-primary">Registrarse</button>
        </form>
    </div>

    <!-- Agrega el script de Bootstrap y cualquier otro script necesario -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Agrega el script para alternar la visibilidad de la contraseña -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>
</body>
</html>
