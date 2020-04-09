<?php

$content = 'Algo Aqui';
$file = 'test.txt';

if (file_exists($file)) {
    // file_put_contents($file, $content); // escreve no arquivo

    var_dump(file_get_contents($file)); // ler o arquivo
} else {
    echo 'Arquivo não existe!';
}