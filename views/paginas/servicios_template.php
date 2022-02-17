<ul class="precios-listas">
    <h3>Un Servicio Premium</h3>

    <?php foreach($servicios as $servicio) : ?>
    <li class="lista">
        <h4><?php echo $servicio->nombre; ?></h4>
        <p>Precio: <span><?php echo $servicio->precio; ?>€</span></p>
    </li>
    <?php endforeach; ?>
</ul>