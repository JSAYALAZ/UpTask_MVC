<?php

namespace Controllers;

use MVC\Router;

class LoginController{
    //PAGINA DE INICIO
    public static function login(Router $router){
       $titulo = 'Iniciar Sesion';
        if($_SERVER['REQUEST_METHOD']==='POST'){

        }

        $router->render('auth/login',[
            'titulo'=>$titulo
        ]);
    }

    //PAGINA CERRAR SESION
    public static function logout(){
        echo 'Desde logout';
        
    }
    public static function crear(Router $router){
        $titulo = 'Crear Cuenta';
        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
        $router->render('auth/crear',[
            'titulo'=>$titulo
        ]);
    }
    public static function olvide(Router $router){
        $titulo = 'Olvidaste passwd';
        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
        $router->render('auth/olvide',[
            'titulo'=>$titulo
        ]);
    }
    public static function restablecer(Router $router){
        $titulo = 'Reestablecer';
        if($_SERVER['REQUEST_METHOD']==='POST'){

        }
        $router->render('auth/restablecer',[
            'titulo'=>$titulo
        ]);
    }
    public static function mensaje(Router $router){
        $titulo = 'Confirmacion';
        $router->render('auth/login',[
            'titulo'=>$titulo
        ]);
    }
    public static function confirmar(Router $router){
        $titulo = 'Confirmar';
        $router->render('auth/login',[
            'titulo'=>$titulo
        ]);
    }
}