<?php
require_once __DIR__ . "/../../../app/controller/AuthController.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth = new AuthController();
    $auth->login();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Partner - Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="app/Views/assets/img/logos/favi.png" type="image/x-icon">
    <link rel="stylesheet" href="app/Views/assets/css/login.css">
</head>

<body>

    <div class="login-container">

        <?php if (isset($_GET['error'])): ?>
            <div class="alert error">
                <?= $_GET['error'] ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'registered'): ?>
            <div class="alert success">
                Cuenta creada correctamente. Inicia sesión.
            </div>
        <?php endif; ?>

        <img src="app/Views/assets/img/logos/logogym.png" alt="Fit Partner">

        <h2>Iniciar Sesión</h2>

        <form action="index.php?view=login" method="POST">

            <label>Correo electrónico</label>
            <div class="input-group">
                <input type="email" name="email" required>
            </div>

            <label>Contraseña</label>
            <div class="input-group password-box">
                <input type="password" id="password" name="password" required>
                <i class="bi bi-eye-slash toggle-pass" id="togglePassword"></i>
            </div>

            <button type="submit" class="btn-login">Ingresar</button>

            <p class="links">
                <a href="index.php?view=recover">¿Olvidaste tu contraseña?</a><br>
                <a href="index.php?view=register">Crear cuenta</a>
            </p>

        </form>

    </div>

    <div class="footer">© 2025 Fit Partner · Todos los derechos reservados</div>

    <script src="app/Views/assets/js/login.js"></script>

</body>
</html>
