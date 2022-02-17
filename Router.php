<?php
namespace MVC;

class Router {
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn) {
        $this->rutasGET[$url] = $fn;
    }
    public function post($url, $fn) {
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas() {
        session_start();

        $auth = $_SESSION['login'] ?? null;
        $rutasProtegidas = ['/admin', '/servicios/crear', '/servicios/actualizar', '/servicios/eliminar'];
        $urlActual = $_SERVER['REQUEST_URI'] === '' ? '/' : $_SERVER['REQUEST_URI'];
        $metodo = $_SERVER['REQUEST_METHOD'];
        
        if($metodo === 'GET') {
            $fn = $this->rutasGET[$urlActual] ?? null;
        } else {
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        if(in_array($urlActual, $rutasProtegidas) && !$auth) {
            header('Location: /');
        }

        if($fn) {
            call_user_func($fn, $this);
        } else {
            echo "Página no encontrada";
        }
    }

    public function render($view, $datos = []) {
        foreach($datos as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean();
        include __DIR__ . "/views/layout.php";
    }
}