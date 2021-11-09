<?php


$idProducto = (int) $_GET['id'];
$producto = new Producto();
$producto = $producto->traerPorPk($idProducto);


?>

<main class="">

    <div class="tarjeta">

        <div class="detalle">
            <div class="">
                <h2><?= htmlspecialchars($producto->getTitulo())?></h2>
                <p class="precio">Precio: <span>$<?= htmlspecialchars($producto->getPrecio())?></span></p>
                <p><?= htmlspecialchars($producto->getTexto())?></p>
            </div>
        </div>


        <img src="<?= 'img/Ropa/' . $producto->getImagen()?>" alt="<?= htmlspecialchars($producto->getImagenDescripcion())?>" class=""/>

    </div>



</main>
