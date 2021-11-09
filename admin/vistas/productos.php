<?php

$productos = (new Producto())->todo();

?>

<main class="main-container">
    <div class="container">
        <h1>Administracion de Productos</h1>

        <div>
            <a href="index.php?s=productos-nuevos">Subir un Producto</a>
        </div>
        <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Texto</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $producto->getProductoId()?></td>
                    <td><?= htmlspecialchars($producto->getFecha()) ?></td>
                    <td><?= htmlspecialchars($producto->getTitulo())?></td>
                    <td><?= htmlspecialchars($producto->getPrecio())?></td>
                    <td><?= htmlspecialchars($producto->getTexto())?></td>
                    <td> <img src="<?= '../img/Ropa/' . $producto->getImagen()?>" alt="<?= htmlspecialchars($producto->getImagenDescripcion())?>" class=""/></td>
                    <td>
                        <a href="index.php?s=productos-editar&id=<?= $producto->getProductoId();?>">Editar</a>

                        <form action="acciones/productos-eliminar.php?id=<?= $producto->getProductoId();?>" method="post" class="form-eliminar">
                            <input type="hidden" name="id" value="<?= $producto->getProductoId();?>">
                            <button class="enviar" type="submit"> Eliminar<span class="visually-hidden"> el producto: <?= htmlspecialchars($producto->getTitulo());?></span></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>

        </table>

    </div>
</main>

<script>
    d = document;
    d.addEventListener('DOMContentLoaded', function() {
        const forms = d.querySelectorAll('.form-eliminar');
        for (let i = 0; i < forms.length; i++) {
            forms[i].addEventListener('submit', function(e) {
                if (!confirm('¿Estas seguro de eliminar el producto?')) {
                    e.preventDefault();
                }
            });
        }
    });
</script>
