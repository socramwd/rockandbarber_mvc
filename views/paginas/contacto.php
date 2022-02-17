<main class="contenedor contacto">
    <h1>Contacto</h1>

    <?php if($envio === true) { ?>
        <p class="alerta exito"><?php echo "Mensaje enviado correctamente"; ?></p>        
    <?php } if ($envio === false) { ?>
        <p class="alerta error"><?php echo "Error al enviar el mensaje"; ?></p>
    <?php } ?>

    <picture>
        <source srcset="build/img/foto_contacto.webp" type="image/webp">
        <source srcset="build/img/foto_contacto.jpg" type="image/jpeg">
        <img src="build/img/foto_contacto.jpg" alt="Imagen Contacto" loading="lazy"> 
    </picture>

    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Envíanos un mensaje</legend>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu nombre" name="contacto[nombre]">

            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" placeholder="Tu Telefono" name="contacto[telefono]">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu Email" name="contacto[email]">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="contacto[mensaje]"></textarea>
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde-block">
    </form>

    <div class="datos">
        <div class="row">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#CC0000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
            </div>

            <div class="texto">
                <h2>Rock & Barber</h2>

                <p>c/ Acueducto</p>
                <p>Bloque 6, Local 2</p>
                <p>41008 Sevilla</p>
            </div>                    
        </div>

        <div class="row">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#CC0000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    </svg>
            </div>

            <div class="texto">
                <h2>(+34) 658 66 70 20</h2>
            </div>
        </div>

        <div class="row">
            <div class="icono">
                <img src="build/img/email-svg.png" alt="svg email">
            </div>

            <div class="texto">
                <h2>rockandbarber@gmail.com</h2>
            </div>
        </div>

        <div class="row">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="50" height="50" viewBox="0 0 24 24" stroke-width="1.5" stroke="#CC0000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="9" />
                    <polyline points="12 7 12 12 15 15" />
                </svg>
            </div>

            <div class="texto">
                <h2>Horario</h2>
                <p><span>Lunes a Jueves</span></p>
                <p>10:00 a 14:00 | 16:30 a 20:00</p>
                <p><span>Viernes</span></p>
                <p>10:00 a 20:00</p>
            </div>
        </div>
    </div>
</main>