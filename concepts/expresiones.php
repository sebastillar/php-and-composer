<?php

$password = '123456';

// backslash / indica que es el contenedor de la expresión regular
// ^ indica el comienzo de la expresión
// $ indica el final de la expresión
// [] establecen el patrón
// {} cantidad de caracteres
echo preg_match('/^[0-9]{6-9}$/', $password);
