<div class="contenedor admin">
    <h1>Actualizar Servicio</h1>

    <?php foreach($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/admin" class="boton-verde btn-volver">VOLVER</a>

    <form method="POST" class="formulario">
        <?php include __DIR__ . '/formulario.php'; ?>

        <input type="submit" value="ACTUALIZAR SERVICIO" class="boton-verde">
    </form>
</div>