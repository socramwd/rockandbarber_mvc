<fieldset>
    <legend>Información del servicio</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="servicio[nombre]" placeholder="Nombre del servicio" value="<?php echo s($servicio->nombre);?>">

    <label for="precio">Precio:</label>
    <input type="number" step="any" id="precio" name="servicio[precio]" placeholder="Precio del servicio" value="<?php echo s($servicio->precio);?>">

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="servicio[descripcion]" cols="30" rows="10" placeholder="Descripción del servicio"><?php echo s($servicio->descripcion);?></textarea>
</fieldset>