<?php


/**
 * Obtiene las rutas del sitio.
 * Las rutas estan ordenadas en un array asociativo donde cada ruta esta indicada como la "Key" del array.
 * Como valor de cada key, hay otro array con los datos propios de esa ruta, como por ejemplo el "title"
 *
 * EJ:
 *
 *          'home' =>   [
 *              'title' => 'Pagina principal',
 *          ],
 * ...
 * @return string[][]
 */

function obtenerRutasSitio() : array{
    return [
        'home' =>   [
            'title' => 'Pagina principal',
        ],
        'tienda' =>   [
            'title' => 'Tienda Online',
        ],
        'producto' =>   [
            'title' => 'Descripción del producto',
        ],
        'form' =>   [
            'title' => 'Formulario de Contacto',
        ],
        '404' =>   [
            'title' => 'Pagina no encontrada',
        ],

    ];
}


/**
 * Obtiene las rutas del panel admin.
 *
 * @param string $ruta
 * @return string
 */

function getRutasAdmin() : array{
    return [
        'home' =>   [
            'title' => 'Pagina principal',
            'autenticacion' => true,
        ],
        'login' =>   [
            'title' => 'Iniciar Sesion',
        ],
        'productos' =>   [
            'title' => 'Administracion de Productos',
            'autenticacion' => true,
        ],
        'productos-nuevos' =>   [
            'title' => 'Publicar Productos',
            'autenticacion' => true,
        ],
        'productos-editar' =>   [
            'title' => 'Editar Productos',
            'autenticacion' => true,
        ],

    ];
}

