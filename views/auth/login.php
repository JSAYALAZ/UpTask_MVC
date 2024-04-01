<div class="contenedor login">
    <?php
        include_once __DIR__.'/../templates/nombre-sitio.php';
    ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>

        <form action="" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input 
                type="mail"
                id="email"
                placeholder="Tu email"
                name="email"
                >
            </div>
            <div class="campo">
                <label for="passwd"><Cc:ie></Cc:ie>ontraseña</label>
                <input 
                type="password"
                id="passwd"
                placeholder="Tu contraseña"
                name="passwd"
                >
            </div>

            <input type="submit" class="boton" value="Iniciar Sesion">
        </form>
        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? Obtener una</a>
            <a href="/olvide">Olvidaste tu contraseña? Recordar</a>
        </div>
    </div>

</div>