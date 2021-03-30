<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesion</h1>

    <?php
    foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/login">
        <fieldset>
            <legend>Correo Electronico y Password</legend>


            <label for="correo">Correo Electronico</label>
            <input type="email" placeholder="Correo Electronico" id="correo" name="email" required />
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Contraseña" id="password" name="password" required />

        </fieldset>
        <input type="submit" name="" value="Iniciar Sesion" class="boton boton-verde">
    </form>
</main>