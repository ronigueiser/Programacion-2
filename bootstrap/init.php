<?php
//Sesiones
session_start();


//Fechas
date_default_timezone_set('America/Argentina/Buenos_Aires');



//Constantes
const RUTA_RAIZ = __DIR__ . DIRECTORY_SEPARATOR . '..';
const RUTA_IMGS = RUTA_RAIZ . DIRECTORY_SEPARATOR . 'img';


//Autoload

spl_autoload_register(function ($claseName) {
   $filePath = RUTA_RAIZ . DIRECTORY_SEPARATOR . "clases" . DIRECTORY_SEPARATOR . $claseName . ".php";
    require_once $filePath;
});
