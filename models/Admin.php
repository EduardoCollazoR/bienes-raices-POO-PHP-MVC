<?php

namespace Model;

class Admin extends ActiveRecord
{
    //base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'email', 'password'];

    public $id;
    public $email;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->id = $args['email'] ?? '';
        $this->id = $args['password'] ?? '';
    }

    public function validar()
    {
        if (!$this->email) {
            self::$errores = 'El Email es obligatorio';
        }
        if (!$this->password) {
            self::$errores = 'El Password es obligatorio';
        }
        return self::$errores;
    }
}
