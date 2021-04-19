<main class="contenedor seccion contenido-centrado-login">
    <h1 data-cy="heading-login">Iniciar Sesion</h1>

    <?php
    foreach ($errores as $error) : ?>
        <div data-cy="alerta-login" class="alerta error close"><?php echo $error ?></div>
    <?php endforeach; ?>

    <form data-cy="formulario-login" class="formulario" method="POST" action="/login">




        <label for="correo">Correo Electronico</label>
        <input type="email" placeholder="Correo Electronico" id="correo" name="email" />
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" id="password" name="password" />


        <input type="submit" name="" value="Iniciar Sesion" class="boton boton-verde">
    </form>
</main>