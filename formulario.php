<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$fechaNacimiento = $_POST['fechaNacimiento'];

validarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaNacimiento);



function validarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaNacimiento){
    if($nombre === ''){
        echo 'El nombre esta vacio';
        return false;
    }
    if($apellido === ''){
        echo 'El apellido esta vacio';
        return false;
    }
    if($edad === ''){
        echo 'La edad esta vacia';
        return false;
    }

    if($telefono === ''){
        echo 'El teléfono esta vacio';
        return false;
    }

    if($email === ''){
        echo 'El email esta vacio';
        return false;
    }

    if($fechaNacimiento === ''){
        echo 'La fecha de nacimiento esta vacia';
        return false;
    }
    
    if(!is_numeric($edad)){
        echo 'La edad debe ser un numero.';
        return false;
    }

    if(!is_numeric($telefono)){
        echo 'El teléfono debe ser un numero';
        return false;
    }
}