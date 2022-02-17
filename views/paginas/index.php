<div class="contenedor redes-sociales">
    <div class="facebook">
        <img src="/build/img/facebook.png" alt="Logo Facebook" class="logo-facebook">

        <?php include 'facebook.php'; ?>
    </div>
    
    <div class="instagram">
        <img src="build/img/instagram.png" alt="Logo Instagram" class="logo-instagram">

        <?php include 'instagram.php'; ?>
    </div>            
</div>

<div class="barberia">
    <div class="contenedor">
        <?php include 'banner.php'; ?>

        <a href="/barberia" class="boton-transparente-block">Mostrar Más</a>
    </div>            
</div>

<div class="contenedor contenido-principal">
    <main class="blog">
        <h2>R&B Blog</h2>

        <?php include 'blog_template.php'; ?>
    </main>

    <aside class="servicios">
        <h2>Servicios</h2>

        <?php
            include 'servicios_template.php';
        ?>
            
        <a href="/servicios" class="boton-azul-block">Más Información</a>
    </aside>
</div><!--contenido-principal-->