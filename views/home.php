<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Inicio</title>
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['user'])): ?>
            <div class="jumbotron mt-5">
                <h1 class="display-4">¡Bienvenido, <?php echo $_SESSION['user']['username']; ?>!</h1>
                <p class="lead">Gracias por iniciar sesión. Estás en la página de inicio.</p>
                <hr class="my-4">
                <p>¡Explora nuestro increíble contenido!</p>
                <form action="" method="post">
                    <button type="submit" name="logout" class="btn btn-danger">Cerrar sesión</button>
                </form>
            </div>
        <?php else: ?>
            <div class="text-center mt-5">
                <h2 class="mb-4">Bienvenido a nuestra plataforma</h2>
                <p class="lead">Inicia sesión para acceder al contenido exclusivo.</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
