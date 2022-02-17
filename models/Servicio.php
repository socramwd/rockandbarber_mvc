<?php

namespace Model;

class Servicio extends ActiveRecord {
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio', 'descripcion'];

    public $id;
    public $nombre;
    public $precio;
    public $descripcion;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "Debes añadir un nombre";
        }
        if(!$this->precio) {
            self::$errores[] = "El precio es obligatorio";
        }
        return self::$errores;
    }
}