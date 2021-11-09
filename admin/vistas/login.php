<main class="main-container">
    <div class="container">
        <h1>Ingresar al Panel de Administracion</h1>

        <p>Para ingresar el panel debes ingresar con tus datos</p>

        <form action="acciones/auth-iniciar-sesion.php" method="post">
            <div class="">
                <label for="email">Email </label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa tu email">
            </div>
            <div class="">
                <label for="password">Constraseña </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa tu password">
            </div>

            <button type="submit" class="">Ingresar</button>

        </form>
    </div>
</main>