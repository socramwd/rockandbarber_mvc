<?php
namespace Controllers;

use MVC\Router;
use Model\Servicio;
use PHPMailer\PHPMailer\PHPMailer;


class PaginasController {
    public static function index(Router $router) {
        $servicios = Servicio::get(5);
        $inicio = true;

        $router->render('paginas/index', [
            'servicios' => $servicios,
            'inicio' => $inicio
        ]);
    }

    public static function barberia(Router $router) {
        $router->render('paginas/barberia');
    }

    public static function servicios(Router $router) {
        $servicios = Servicio::all();

        $router->render('paginas/servicios', [
            'servicios' => $servicios
        ]);
    }

    public static function reservas(Router $router) {
        $router->render('paginas/reservas');
    }

    public static function contacto(Router $router) {
        $envio = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $respuestas = $_POST['contacto'];

            $mail = new PHPMailer();

            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '4f0ae6c836bb6e';
            $mail->Password = 'f1b40615dde8c7';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            $mail->setFrom('admin@rockandbarber.com');
            $mail->addAddress('admin@rockandbarber.com', 'RockAndBarber.com');
            $mail->Subject = 'Nuevo mensaje desde el formulario de rockandbarber.com';

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] . '</p>';
            $contenido .= '<p>Teléfono: ' . $respuestas['telefono'] . '</p>';
            $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = "Texto sin html";

            if($mail->send()) {
                $envio = true;
            } else {
                $envio = false;
            }
        }

        $router->render('paginas/contacto', [
            'envio' => $envio
        ]);
    }

    public static function blog(Router $router) {
        $router->render('paginas/blog');
    }

    public static function entrada(Router $router) {
        $router->render('paginas/entrada');
    }
}