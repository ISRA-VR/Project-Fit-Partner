<?php
session_start();

$view = isset($_GET['view']) ? $_GET['view'] : 'login';

$views_bloqueadas = ['login', 'register'];

if (isset($_SESSION['user']) && in_array($view, $views_bloqueadas)) {
    header("Location: index.php?view=dashboard");
    exit;
}

switch ($view) {

    case 'login':
        require 'app/Views/Auth/login.php';
        break;

    case 'register':
        require 'app/Views/Auth/register.php';
        break;

    case 'recover':
        require 'app/Views/Auth/recover.php';
        break;

    case 'dashboard':
        require 'app/Views/Auth/dashboard.php';
        break;

    case 'logout':
        require 'app/Views/Auth/logout.php';
        break;

    default:
        echo "404 - Página no encontrada";
}