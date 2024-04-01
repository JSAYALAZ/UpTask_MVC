<div class="contenedor olvide">
    <?php
        include_once __DIR__.'/../templates/nombre-sitio.php';
    ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Olvidaste tu contraseña</p>

        <form action="/olvide" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input 
                type="mail"
                id="email"
                placeholder="Tu email"
                name="email"
                >
            </div>
            <input type="submit" class="boton" value="Enviar email de verificion">
        </form>
        <div class="acciones">
            <a href="/">Ya tienes una cuenta? Iniciar Sesion</a>
            <a href="/crear">Aun no tienes una cuenta? Obtener una</a>
            
        </div>
    </div>

</div>