<?php

require_once __DIR__ . '/../../bootstrap/init.php';

$email = $_POST['email'];
$password = $_POST['password'];

$autenticacion = new Autenticacion();

if($autenticacion->iniciarSesion($email, $password)) {
    $_SESSION['mensaje_exito'] = 'Bienvenido';
    header('Location: ../index.php?s=home');
    exit;

} else {
    $_SESSION['mensaje_error'] = 'El email o la contraseña son incorrectos';
    $_SESSION['old_data'] = $_POST;
    header('Location: ../index.php?s=login');
    exit;
}

//$usuario = (new Usuario())->traerPorEmail($email);
//
//if ($usuario === null){
//    echo 'El usuario no existe';
//    exit;
//}
//
//if (!password_verify($password, $usuario->getPassword()))
//{
//    echo 'La contraseña es incorrecta';
//    exit;
//}
//
//echo 'Bienvenido';