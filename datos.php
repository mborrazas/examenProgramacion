<?php

require 'config.php';

function guardarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaNacimiento)
{
    $conexion = new mysqli(
        IP_DB,
        USUARIO_DB,
        PASSWORD_DB,
        NOMBRE_DB
    );

    $sql = "INSERT INTO personas(nombre, apellido, edad, telefono, email, fechaNacimiento) VALUES(
        '{$nombre}',
        '{$apellido}',
        {$edad},
        '{$telefono},
        '{$email},
        '{$fechaNacimiento}
        ');";
    $conexion->query($sql);
        
    echo 'Datos guardados.';
    return true;
}
