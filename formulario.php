<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"> <br>
        Apellido: <input type="text" name="apellido" id="apellido"> <br>
        Telefono: <input type="text" name="telefono" id="telefono"> <br>
        Fecha: <input type="date" name="fecha" id= "fecha"> <br>
        Edad: <input type="number" name="edad" id="edad"> <br>
        Email: <input type="email" name="email" id="email"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
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