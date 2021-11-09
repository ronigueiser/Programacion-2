<?php

/**
 * Esta funcion obtiene todos los productos y los retorna
 *
 * @return Producto[]
 */
function todosLosProductos (): array {

    // Levantamos el archivo .JSON
    $filename               = __DIR__ . '/../data/productos.json';
    $productoJSON           =  file_get_contents($filename);
    $dataProductos          = json_decode($productoJSON, true);

    $devolucionProductos = [];

    foreach ($dataProductos as $producto){
        $productoObjeto = new Producto;
        $productoObjeto ->producto_id           = $producto['producto_id'];
        $productoObjeto ->titulo                = $producto['titulo'];
        $productoObjeto ->precio                = $producto['precio'];
        $productoObjeto ->imagen                = $producto['imagen'];
        $productoObjeto ->imagen_descripcion    = $producto['imagen_descripcion'];
        $productoObjeto ->texto                 = $producto['texto'];

        $devolucionProductos[] = $productoObjeto;
    }


    return $devolucionProductos;
}


/**
 * Retorna el producto con el id $id
 * Si no existe, retorna null
 *
 * @param int $id
 */
function traerProductoPorID (int $id): ?Producto
{
    $productos = todosLosProductos();

    foreach ($productos as $producto){
        if ($producto->producto_id === $id){
            return $producto;
        }
    }
    return null;
}
