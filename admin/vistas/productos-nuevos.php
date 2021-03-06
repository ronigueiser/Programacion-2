<?php

if(isset($_SESSION['errores'])){
    $errores = $_SESSION['errores'];
    unset($_SESSION['errores']);
} else {
    $errores = [];
}

if(isset($_SESSION['old_data'])){
    $oldData = $_SESSION['old_data'];
    unset($_SESSION['old_data']);
} else {
    $oldData = [];
}
?>


<main class="main-content">
    <div class="container fomr-panel">
        <h1>Publicar nuevo Producto a la tienda</h1>

        <p>Completa el formulario de carga de productos, cuando este completo presiona "Subir"</p>



        <form action="acciones/productos-crear.php" method="POST" enctype="multipart/form-data">
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
                <label for="imagen_descripcion">Descripci??n de la imagen (solo si se sube una imagen)</label>
                <input type="text" id="imagen_descripcion" name="imagen_descripcion" class="form-control" value="<?= $oldData['imagen_descripcion'] ?? '';?>">
            </div>
            <button type="submit">Subir</button>
        </form>

    </div>
</main>