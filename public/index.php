<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();


//PAGINA PRINCIPAL - LOGIN
$router->get('/',[LoginController::class, 'login']);
$router->post('/',[LoginController::class, 'login']);
$router->get('/logout',[LoginController::class, 'logout']);


//CREAR CUENTA
$router->get('/crear',[LoginController::class, 'crear']);
$router->post('/crear',[LoginController::class, 'crear']);

//OLVIDE MIS PASSWORD
$router->get('/olvide',[LoginController::class, 'olvide']);
$router->post('/olvide',[LoginController::class, 'olvide']);

//RESTABLECER PASSWORD
$router->get('/restablecer',[LoginController::class, 'restablecer']);
$router->post('/restablecer',[LoginController::class, 'restablecer']);

//VENTANAS DE CONFIRMACION
$router->get('/mensaje',[LoginController::class, 'mensaje']);
$router->get('/confirmar',[LoginController::class, 'confirmar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();