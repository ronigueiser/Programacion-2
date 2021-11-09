<?php
$producto = (new Producto())->traerPorPk($_GET['id']);

if(isset($_SESSION['errores'])){
    $errores = $_SESSION['errores'];
    unset($_SESSION['errores']);
} else {
    $errores = [];
}

if(isset($_SESSION['old_data'])){
    $oldData = $_SESSION['old_data'];
//  $oldData['imagen'] = $producto->getImagen();
    unset($_SESSION['old_data']);
} else {

    $oldData = [
        'id' => $producto->getProductoId(),
        'titulo' => $producto->getTitulo(),
        'precio' => $producto->getPrecio(),
        'texto' => $producto->getTexto(),
        'imagen' => $producto->getImagen(),
        'imagen_descripcion' => $producto->getImagenDescripcion(),

    ];
}
?>


<main class="main-content">
    <div class="container fomr-panel">
        <h1>Editar Producto en la tienda</h1>

        <p>Modifica los datos de la noticia y presiona "Editar"</p>

        <form action="acciones/productos-editar.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $oldData['id'];?>">

            <div class="form-fila">
                <label for="titulo">Titulo</label>
                <input
                        type="text"
                        id="titulo"
                        name="titulo"
                        class="form-control"
                        aria-describedby="help-titulo <?= isset($errores['titulo']) ? 'error-titulo' : '';?>"
                        value="<?= $oldData['titulo'] ?? '';?>"
                >

                <?php if(isset($errores['titulo'])): ?>
                    <p class="error" style="color: red; font-weight: bold" id="error-titulo">
                        ( X ) <span class="visually-hidden">Error: </span><?= $errores['titulo'] ?> </p>
                <?php endif; ?>

                <div id="help-titulo">El titulo debe tener al menos 3 caracteres</div>
            </div>


            <div class="form-fila">
                <label for="precio">Precio</label>
                <input
                        type="number"
                        id="precio"
                        name="precio"
                        class="form-control"
                        aria-describedby="help-precio <?= isset($errores['precio']) ? 'error-precio' : '';?>"
                        value="<?= $oldData['precio'] ?? '';?>"
                >

                <?php if(isset($errores['precio'])): ?>
                    <p class="error" style="color: red; font-weight: bold" id="error-precio">
                        ( X ) <span class="visually-hidden">Error: </span><?= $errores['precio'] ?> </p>
                <?php endif; ?>

                <div id="help-precio">El precio debe ser un numero</div>
            </div>

            <div class="form-fila">
                <label for="texto">Texto</label>
                <textarea
                        id="texto"
                        name="texto"
                        class="form-control"
                        aria-describedby="help-texto <?= isset($errores['texto']) ? 'error-texto' : '';?>"><?= $oldData['texto'] ?? '';?></textarea>

                <?php if(isset($errores['texto'])): ?>
                    <p class="error" style="color: red; font-weight: bold" id="error-texto">
                        ( X ) <span class="visually-hidden">Error: </span><?= $errores['texto'] ?> </p>
                <?php endif; ?>

                <div id="help-texto">El texto debe tener maximo 255 caracteres</div>
            </div>

            <div class="form-fila">
                <label for="imagen">Imagen (opcional)</label>
                <input type="file" id="imagen" name="imagen" class="form-control">
            </div>
            <div class="form-fila">
                <p>Imagen actual</p>
                <div>
                    <img src="<?= '../img/Ropa/' . $producto->getImagen();?>" alt="Previsualizacion de la imagen">
                </div>
                <p>Si no selecciona una imagen, quedara la que se muestra en pantalla</p>
            </div>
            <div class="form-fila">
                <label for="imagen_descripcion">Descripción de la imagen (solo si se sube una imagen)</label>
                <input type="text" id="imagen_descripcion" name="imagen_descripcion" class="form-control" value="<?= $oldData['imagen_descripcion'] ?? '';?>">
            </div>
            <button type="submit">Editar</button>
        </form>

    </div>
</main>