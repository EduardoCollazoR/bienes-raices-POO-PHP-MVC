<main class="contenedor seccion contenido-centrado">
    <h1>Registrar Vendedor</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>

    <a href="/admin" class="boton boton-verde">Volver</a>


    <form class="formulario" method="POST" action="/vendedores/crear">
        <?php include 'formulario.php'; ?>

        <input type="submit" value="Registrar Vendedor" class="boton boton-verde">

    </form>
</main>