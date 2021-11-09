<?php

$password = "asdasd";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo "el password " . $password . " es hasheado " . $hash;
