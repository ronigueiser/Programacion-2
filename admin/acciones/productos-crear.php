<?php

require_once __DIR__ . '/../../bootstrap/init.php';



$autenticacion = new Autenticacion();
if (!$autenticacion->estaAutenticado()) {
    $_SESSION['mensaje_error'] = 'Debe estar autenticado';
    header('Location: ../index.php?s=login');
    exit;
}



$titulo                 = $_POST['titulo'];
$precio                 = $_POST['precio'];
$texto                  = $_POST['texto'];
$imagen_descripcion     = $_POST['imagen_descripcion'];
$imagen                 = $_FILES['imagen'];


//3.
$validador = new ProductosCrearValidador($_POST);
$validador->ejecutar();


if ($validador->hasErrors()){
    $_SESSION['errores'] = $validador->getErrores();
    $_SESSION['old_data'] = $_POST;
    header('Location: ../index.php?s=productos-nuevos');
    exit;
}


//4.

if(!empty($imagen['tmp_name'])){
    $nombreImagen = date('YmdHis_').$imagen['name'];
    move_uploaded_file($imagen['tmp_name'],__DIR__.'/../../img/Ropa/'.$nombreImagen);
} else {
    $nombreImagen = '';
}



try {
    $producto = new Producto();
    $producto->crear([
        'usuario_fk' => 4,
        'titulo' => $titulo,
        'precio' => $precio,
        'texto' => $texto,
        'imagen' => $nombreImagen,
        'imagen_descripcion' => $imagen_descripcion,
    ]);

    $_SESSION['mensaje_exito'] = 'Producto creado correctamente';
    header('Location: ../index.php?s=productos');
    exit;
} catch (PDOException $e) {
    $_SESSION['mensaje_error'] = 'Error al crear el producto';
    header('Location: ../index.php?s=productos-nuevos');
    exit;
}


