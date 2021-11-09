<main class="somos container">

    <div class="quienes row">

        <div class="col-10 m-auto text-center mt-5 mb-3">
            <h2 id="nosotros" class="titulo">¿Quiénes somos?</h2>
        </div>

        <div class="col-10 col-md-8 col-lg-6 m-auto col-xl-6">
            <p>

                Somos RUNTEAM, un <strong>grupo de profesionales amantes del running.</strong> Tenemos todas las herramientas
                para acompañarte en tu proceso de aprendizaje y hacerte lograr objetivos que quizás no creas posibles.<br/>

                Buscamos la forma de aprender y disfrutar el momento. Esto se logra generando grupos privados de
                entrenamiento con un profesional único para cada grupo y así poder crear un buen ambiente entre los clientes
                y nuestros entrenadores.

            </p>
        </div>
    </div>

</main>

<aside class="container">

    <!--    Puse la ruta para php pero no funciono, por eso le puse "index.html#gracias"-->

    <div class="row">
        <h2 id="datos" class="titulo col-10 m-auto mt-5 col-lg-6">Formulario</h2>
    </div>


    <form action="enviar_formulario.php" method="post" enctype="application/x-www-form-urlencoded" class="row" >


        <div class="col-10 m-auto mt-5 col-lg-6">


            <p id="gracias">Gracias por el envio!<a href="#">Cerrar</a> </p>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="Apellido" placeholder="Apellido" name="apellido" required>
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="name@example.com" name="email" required>
            </div>

            <label>¿Participo de una maratón de al menos 5KM?</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="participo" id="si">
                <label class="form-check-label" for="si">
                    Si
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="participo" id="no">
                <label class="form-check-label" for="no">
                    No
                </label>
            </div>


            <div class="mb-3">
                <label for="consultas" class="form-label">Deja tu consulta</label>
                <textarea class="form-control" id="consultas" rows="3" style="resize: none" name="consulta"></textarea>
            </div>

            <input type="submit" value="Enviar" class="enviar mb-3">

        </div>

    </form>
</aside>
