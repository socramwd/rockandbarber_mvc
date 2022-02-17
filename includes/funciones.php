<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . '/funciones.php');

function incluirTemplate(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado() {
    session_start();
    if(!$_SESSION["login"]) {
        header('Location: /');
    }
}

function debuguear($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";exit;
}

function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Servicio creado correctamente';
            break;
        case 2:
            $mensaje = 'Servicio actualizado correctamente';
            break;
        case 3:
            $mensaje = 'Servicio eliminado correctamente';
            break;
        
        default:
            $mensaje = false;
            break;
    }

    return $mensaje;
}

function validarRedireccionar(string $url) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id) {
        header("Location: ${url}");
    }
    return $id;
}