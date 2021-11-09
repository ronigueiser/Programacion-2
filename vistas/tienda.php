<?php

$producto = new Producto();
$productos = $producto->todo();

?>




<main class="container">

    <div class="muestra">

        <h2>Ropa</h2>

    </div>

    <div class="row">

        <?php
        foreach ($productos as $producto):
        ?>


        <article class="col-md-6 col-lg-4">
            <div class="ajuste">

                <img src="<?= 'img/Ropa/' . $producto->getImagen()?>" alt="<?= htmlspecialchars($producto->getImagenDescripcion())?>" class=""/>

                <div class="d-flex flex-column align-items-center">
                    <h3><?= htmlspecialchars($producto->getTitulo())?></h3>
                    <p>Precio: <span>$<?= htmlspecialchars($producto->getPrecio())?></span></p>
                    <div class="agregar"><a href="index.php?s=producto&id=<?= htmlspecialchars($producto->getProductoId());?>">Ver</a></div>
                </div>
            </div>
        </article>

        <?php
        endforeach;
        ?>


    </div>

</main>
