<main class="contenedor seccion">
    <h1>Contacto</h1>

    <?php if ($mensaje) { ?>

        <p class='alerta exito'> <?php echo  $mensaje ?></p>;

    <?php  } ?>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpg" />
        <img src="build/img/destacada3.jpg" alt="anuncio2" loading="lazy" />
    </picture>

    <h2>Llene el Formulario de Contacto</h2>
    <form action="/contacto" method="POST" class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Nombre" id="nombre" name="contacto[nombre]" required />

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Sobre la Propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>Seleccione</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto"> Precio o Presupuesto</label>
            <input type="number" placeholder="Presupuesto" id="presupuesto" name="contacto[precio]" required />
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required />
            </div>
            <div class="forma-contacto">
                <label for="contactar-correo">Correo Electronico</label>
                <input type="radio" value="correo" id="contactar-correo" name="contacto[contacto]" required />
            </div>

            <div id="contacto"></div>


        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde" />
    </form>
</main>