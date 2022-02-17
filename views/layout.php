<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Rock&Barber</title>

        <link rel="icon" href="../build/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="../build/css/app.css">
    </head>

    <body>
        <header class="site-header <?php echo $inicio ? 'index' : 'general';?>">
            <div class="contenedor">
                <div class="barra">
                    <a href="index.php">
                        <img src="/build/img/logo.png" alt="Logotipo" class="no-margin">
                    </a>

                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="Menu responsive">
                    </div>

                    <nav class="navegacion">
                        <a href="/barberia">La Barbería</a>
                        <a href="/servicios">Servicios</a>
                        <a href="/reservas">Reservar</a>
                        <a href="/contacto">Contacto</a>
                        <a href="/blog">Blog</a>
                        <?php if($auth) : ?>
                            <a href="/logout">Cerrar Sesión</a>
                            <a href="/admin">Administración</a>
                        <?php endif; ?>
                    </nav>
                </div><!--.barra-->

                <?php if($inicio) { ?>
                <div class="texto-header">
                    <h2>Rock&Barber</h2>
                    <p>Arreglo de cabello y barba en Sevilla</p>
                </div><!--texto-header-->
                <?php } ?>
            </div><!--.contenedor-->
        </header>

        <?php echo $contenido; ?>

        <div class="site-footer">
            <div class="contenedor">
                <div class="barra">
                    <a href="/">
                        <img src="/build/img/r&b.jpg" alt="rock&barber">
                    </a>

                    <nav class="navegacion">
                        <a href="/barberia">La Barbería</a>
                        <a href="/servicios">Servicios</a>
                        <a href="/reservas">Reservar</a>
                        <a href="/contacto">Contacto</a>
                        <a href="/blog">Blog</a>
                    </nav>
                </div>

                <p class="copyright">Socram Web Design &mdash; Todos los derechos reservados &copy;<?php echo date('Y'); ?></p>
            </div>
        </div>

        <script src="../build/js/bundle.js"></script>
    </body>
</html>