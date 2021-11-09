<?php
require_once __DIR__ . '/../../bootstrap/init.php';


$autenticacion = new Autenticacion();
if (!$autenticacion->estaAutenticado()) {
    $_SESSION['mensaje_error'] = 'Debe estar autenticado';
    header('Location: ../index.php?s=login');
    exit;
}

$id = $_POST['id'];

try {
    $producto = new Producto();
    $producto->eliminar($id);


    $_SESSION['mensaje_exito'] = 'Producto eliminado';
    header('Location: ../index.php?s=productos');
} catch (Exception $e) {
    $_SESSION['mensaje_error'] = 'No pudo eliminarse la noticia';
    header('Location: ../index.php?s=productos');
}

