<?php

$hash = '$2y$10$2V6QqYD9uZQTRbZ/FdNLiu6nJimcnp1oJ3XbhJFqAsfr0uyjzf6za';
$password = 'asdasd';

 echo "el password: " . $password . "<br>";
 echo "el hash: " . $hash . "<br>";

 if (password_verify($password, $hash)) {
    echo '¡La contraseña coincide!';
    } else {
     echo 'La contraseña no coincide.';
 }