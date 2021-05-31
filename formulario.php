<?php

public $nombre;
public $apellido;
public $telefono
public $fecha;
public $edad;
public $email;

public static function insertarPersona($nombre,$apellido,$telefono,$fecha,$edad,$email){
    $p = new PersonaModelo();
    $p -> nombre = $nombre
    $p -> apellido = $apellido
    $p -> telefono = $telefono
    $p -> fecha = $fecha
    $p -> edad = $edad
    $p -> email = $email
    $p -> return guardar();
    
}
public function guardar() {
    $sql = "INSERT INTO persona(nombre,apellido,telefono,fecha,edad,email) VALUES (
        '{$nombre -> nombre}'
        '{$apellido -> apellido}'
        '{$telefono -> telefono}'
        '{$fecha -> fecha}'
        '{$edad -> edad}'
        '{$email -> email}'
        )";
         "
}
