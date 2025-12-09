<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Partner - Recuperar contraseña</title>
    <link rel="shortcut icon" href="app/Views/assets/img/logos/favi.png" type="image/x-icon">
    <link rel="stylesheet" href="app/Views/assets/css/recuperar.css">
</head>

<body>
    <div class="login-container">
        <!-- Tu código aquí -->
        <h2>Recuperar contraseña
            <p>Ingresa tu correo electrónico para recibir un enlace de recuperación</p>
        </h2>

        <form method="POST">
            <label>Ingresa tu correo</label>
            <input type="email" name="email" required>

            <button>Enviar enlace de recuperación</button>
            <br>
            <div>Volver al <a href="index.php?view=login">LOGIN</a></div>
        </form>
    </div>
    <div class="footer">© 2025 Fit Partner - Todos los derechos reservados</div>
</body>

</html>