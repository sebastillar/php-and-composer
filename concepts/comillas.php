<?php

echo 'Un texto de una línea
varias líneas
pero sin considerar $variables';

$name = 'Sebastian';

echo "Si utilizamos comillas dobles podemos obtener el valor de una variable, por ejemplo la de mi nombre $name";


$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User
{
    public $name = 'Sebastian';
} 

$user = new User;

echo "$user->name quiere aprender {courses['backend'][0]}";
