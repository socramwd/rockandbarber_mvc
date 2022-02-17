<?php
function conectarDB() : mysqli {
    $db = new mysqli(
        $_ENV['DB_HOST'],  
        $_ENV['DB_USER'],  
        $_ENV['DB_PASS'],  
        $_ENV['DB_BD']
    );

    if(!$db) {
        echo "Error. No se pudo conectar a la Base de Datos";
        exit;
    }
    return $db;
}