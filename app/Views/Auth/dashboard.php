<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("Location: index.php?view=login");
    exit;
}

$name = $_SESSION['user']['nombre'] ?? "Usuario";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Partner - Inicio</title>
    <link rel="shortcut icon" href="app/Views/assets/img/logos/favi.png" type="image/x-icon">
</head>
<body>

<h2>Hola, <?= htmlspecialchars($name) ?> 👋</h2>

<p>Bienvenido a tu panel fitness.</p>

<a href="index.php?view=logout">
    <button>Cerrar sesión</button>
</a>

</body>
</html>
