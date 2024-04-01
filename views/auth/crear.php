<div class="contenedor crear">
    <?php
        include_once __DIR__.'/../templates/nombre-sitio.php';
    ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crear una cuenta</p>

        <form action="/crear" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input 
                type="text"
                id="nombre"
                placeholder="Tu nombre"
                name="nombre"
                >
            </div>
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
                <label for="passwd">Contraseña</label>
                <input 
                type="password"
                id="passwd"
                placeholder="Tu contraseña"
                name="passwd"
                >
            </div>
            <div class="campo">
                <label for="confPassword">Confirmar contraseña</label>
                <input 
                type="password"
                id="confPassword"
                placeholder="Confirmar contraseña"
                name="confPassword"
                >
            </div>

            <input type="submit" class="boton" value="Crear cuenta">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes cuenta? Iniciar sesion</a>
            <a href="/olvide">Olvidaste tu contraseña? Recordar</a>
        </div>
    </div>

</div>