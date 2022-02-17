<?php
namespace Controllers;
use MVC\Router;
use Model\Servicio;

class ServicioController {
    public static function index(Router $router) {
        $servicios = Servicio::all();
        $resultado = $_GET['resultado'] ?? null;

        $router->render('/servicios/admin', [
            'servicios' => $servicios,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router) {
        $servicio = new Servicio;
        $errores = Servicio::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $servicio = new Servicio($_POST['servicio']);
            $errores = $servicio->validar();
            
            if(empty($errores)) {
                $servicio->guardar();
            }
        }

        $router->render('/servicios/crear', [
            'servicio' => $servicio,
            'errores' => $errores
        ]);
    }

    public static function actualizar(Router $router) {
        $id = validarRedireccionar('/admin');
        $servicio = Servicio::find($id);
        $errores = Servicio::getErrores();
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $args = $_POST['servicio'];
            $servicio->sincronizar($args);
            $errores = $servicio->validar();
    
            if(empty($errores)) {
                $servicio->guardar();
            }
        }

        $router->render('/servicios/actualizar', [
            'servicio' => $servicio,
            'errores' => $errores
        ]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id) {
                $servicio = Servicio::find($id);
                $servicio->eliminar();
            }
        }
    }
}