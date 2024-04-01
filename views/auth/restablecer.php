<div class="contenedor restablecer">
    <?php
        include_once __DIR__.'/../templates/nombre-sitio.php';
    ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Reestablecer Contraseña</p>

        <form action="/restablecer" method="POST" class="formulario">
            <div class="campo">
                <label for="passwd">Email</label>
                <input 
                type="passwd"
                id="passwd"
                placeholder="Ingresa nueva contraseña"
                name="passwd"
                >
            </div>
            <input type="submit" class="boton" value="Reestablecer Contraseña">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes una cuenta? Iniciar Sesion</a>
            <a href="/crear">Aun no tienes una cuenta? Obtener una</a>
            
        </div>
    </div>

</div>