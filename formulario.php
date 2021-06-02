<?php

$base=mysqli_connect("localhost", "root", "", "parcial");


public static function insertarPersona($nombre,$apellido,$telefono,$fecha,$edad,$email){
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    guardar();
}

public function guardar() {
    $sql = "INSERT INTO persona(nombre,apellido,telefono,fecha,edad,email) VALUES (
        '$nombre', '$apellido', '$telefono', '$fecha', '$edad', '$email')";
mysqli_query($base,$sql);
}

public function error() {
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        header("HTTP/1.1 500 Internal server error");
        die("Internal server error");
    }
}

public function agregadoCorrectamente() {
    echo "Persona Agregada correctamente"
}

public function validarCampos($formulario){
    if($formulario['nombre'] === "" || $formulario['apellido'] === "" || $telefono['telefono'] || $fecha['fecha'] || $formulario['edad'] === "" || $formulario['email'] === ""){           
        return error();
    }
    return agregadoCorrectamente();
}
public function validarNombreYApellido($formulario){
    if($formulario['nombre'] == $formulario['apellido']){
        return error();
    }
    return agregadoCorrectamente();
}

