<?php
 
require 'datos.php';

validarDatos($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['telefono'], $_POST['email'], $_POST['fechaNacimiento']);

function validarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaNacimiento)
{
    validarNombre($nombre);
    validarApellido($apellido);
    validarEdad($edad);
    validarTelefono($telefono);
    validarEmail($email);
    validarFechaDeNacimiento($fechaNacimiento);
    guardarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaNacimiento);
    return true;
}

function validarNombre($nombre)
{
    if ($nombre === '') {
        echo 'El nombre esta vacio';
        die;
    }
}

function validarApellido($apellido)
{
    if ($apellido === '') {
        echo 'El apellido esta vacio';
        die;
    }
}

function validarTelefono($telefono)
{
    if ($telefono === '') {
        echo 'El teléfono esta vacio';
        die;
    }
    if (!is_numeric($telefono)) {
        echo 'El teléfono debe ser un numero';
        die;
    }
}

function validarEdad($edad)
{
    if ($edad === '') {
        echo 'La edad esta vacia';
        die;
    }
    if (!is_numeric($edad)) {
        echo 'La edad debe ser un numero.';
        die;
    }
}

function validarEmail($email)
{

    if ($email === '') {
        echo 'El email esta vacio';
        die;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "La dirección de email no es válida.";
        die;
    }
}


function validarFechaDeNacimiento($fechaNacimiento)
{

    if ($fechaNacimiento === '') {
        echo 'La fecha de nacimiento esta vacia';
        die;
    }
}
