<?php

require_once __DIR__ . '/bootstrap/init.php';
require_once RUTA_RAIZ . '/bootstrap/rutas.php';



$rutas = obtenerRutasSitio();

//Variable para guardar la vista de que recibimos por GET
$vista = $_GET['s'] ?? 'home';

if(!isset($rutas[$vista])){
    $vista = '404';
}



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title><?= $rutas[$vista]['title'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos_ecommerce.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>
<body>



<header class="container">


    <h1 id="logo">Correr mejora tu salud</h1>

    <nav class="navbar navbar-expand-md navbar-light row">
        <div class="container-fluid">

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#barraNav">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="barraNav">

                <ul class="navbar-nav ms-auto text-center hover navbarr">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?s=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?s=tienda">Tienda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?s=form">Formulario</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


</header>

<?php

require __DIR__ . '/vistas/' . $vista . '.php';

?>


<footer>

    <div>
        <ul>

            <li>Nombre: Roni</li>
            <li>Apellido: Gueiser</li>
            <li>Materia: Programación 2</li>
            <li>Turno: Noche</li>
            <li>Comisión: A</li>
            <li>Año: 2021</li>

        </ul>

    </div>

    <div class="redes">

        <ul>
            <li> <a title="Facebook" href="https://www.facebook.com/" target="_blank">
                    <img src="img/redes/face.png" alt="Logo de Facebook"></a></li>

            <li><a title="Instagram" href="https://www.instagram.com/" target="_blank">
                    <img src="img/redes/insta.png" alt="Logo de Instagram"></a></li>

            <li><a title="Twitter" href="https://twitter.com/home" target="_blank">
                    <img src="img/redes/twit.png" alt="Logo de Twitter"></a></li>



        </ul>
    </div>

</footer>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script>

    const btns = document.querySelectorAll('.nav-item')
    const barra = document.querySelector(".navbar-collapse")
    const cierre = new bootstrap.Collapse(barra, {
        toggle: false
    })
    btns.forEach((btn) => {
        btn.addEventListener('click', () => {
            cierre.toggle()
        })
    })

</script>

</body>




</html>

