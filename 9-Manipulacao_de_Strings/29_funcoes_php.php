<?php

$name = 'José Malcher Jr';

if (isset($name))
    echo $name;
else
    echo 'Não existe!';

unset($name); // apaga variável da memória

if (isset($name))
    echo $name;
else
    echo 'Não existe!';