<main class="contenedor">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error) : ?>
        <div class="alerta error" style="width:60%; margin: 0 auto 2rem auto;">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" style="width: 60%; margin: 0 auto;" method="POST" action="/login">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Tu contraseña" name="password">
        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton-verde-block" style="margin-bottom: 2rem;">
    </form>
</main>