<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];

echo '<pre>';
arsort($cart); // ordena decrescente
var_dump($cart);
/*
array(4) {
    [0]=>
  string(9) "Macarrão"
    [1]=>
  string(7) "Feijão"
    [3]=>
  string(6) "Batata"
    [2]=>
  string(5) "Arroz"
}
 */

echo '<hr>';

asort($cart); // ordena crescente
var_dump($cart);
/*
array(4) {
    [2]=>
  string(5) "Arroz"
    [3]=>
  string(6) "Batata"
    [1]=>
  string(7) "Feijão"
    [0]=>
  string(9) "Macarrão"
}
 */

echo '<hr>';

sort($cart); // Ordena os valores e as chaves
var_dump($cart);

/*
array(4) {
    [0]=>
  string(5) "Arroz"
    [1]=>
  string(6) "Batata"
    [2]=>
  string(7) "Feijão"
    [3]=>
  string(9) "Macarrão"
}
 */
echo '<hr>';
