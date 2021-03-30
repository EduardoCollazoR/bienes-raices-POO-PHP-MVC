<main class="contenedor seccion contenido-centrado-login">
    <h1>Iniciar Sesion</h1>

    <?php
    foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/login">




        <label for="correo">Correo Electronico</label>
        <input type="email" placeholder="Correo Electronico" id="correo" name="email" required />
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" id="password" name="password" required />


        <input type="submit" name="" value="Iniciar Sesion" class="boton boton-verde">
    </form>
</main>