<div class="contenedor admin">
    <h1>Administrador Rock&Barber</h1>

    <?php
        if($resultado) {
            $mensaje = mostrarNotificacion(intval($resultado));
            if($mensaje) { ?>
                <p class="alerta exito"><?php echo s($mensaje); ?></p>
    <?php   }
        } 
    ?>

    <a href="/servicios/crear" class="boton-verde">NUEVO SERVICIO</a>

    <h2>Servicios</h2>

    <table class="servicios">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody><!-- Mostrar los resultado -->
            <?php foreach($servicios as $servicio) : ?>
            <tr>
                <td><?php echo $servicio->nombre; ?></td>
                <td><?php echo $servicio->precio; ?>€</td>
                <td><?php echo $servicio->descripcion; ?></td>
                <td>
                    <a href="/servicios/actualizar?id=<?php echo $servicio->id; ?>" class="boton-amarillo-block">Editar</a>
                    <form class="w-100" method="POST" action="/servicios/eliminar">
                        <input type="hidden" name="id" value="<?php echo $servicio->id; ?>">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>