<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($cart);
// array(4) { [0]=> string(5) "Arroz" [1]=> string(6) "Sabão" [2]=> string(7) "Feijão" [3]=> string(8) "Balinhas" }

echo '<hr>';

array_pop($cart); // remove o ultimo
var_dump($cart);
// array(3) { [0]=> string(5) "Arroz" [1]=> string(6) "Sabão" [2]=> string(7) "Feijão" }

echo '<hr>';

array_shift($cart); // remove o primeiro
var_dump($cart);
// array(2) { [0]=> string(6) "Sabão" [1]=> string(7) "Feijão" }

echo '<hr>';

unset($cart[0]); // remove algum registro | se não passar param apaga o array
var_dump($cart);
//array(1) { [1]=> string(7) "Feijão" }

echo '<hr>';

array_push($cart, 'Tapete'); // adiciona registro final
array_push($cart, 'Rodo');
var_dump($cart);
// array(3) { [1]=> string(7) "Feijão" [2]=> string(6) "Tapete" [3]=> string(4) "Rodo" }

echo '<hr>';

array_unshift($cart, 'Microondas'); // adiciona no inicio do array
array_unshift($cart, 'Tapete');
var_dump($cart);
// array(5) { [0]=> string(6) "Tapete" [1]=> string(10) "Microondas" [2]=> string(7) "Feijão" [3]=> string(6) "Tapete" [4]=> string(4) "Rodo" }

echo '<hr>';

$cart = array_unique($cart); // remove elementos duplicados
var_dump($cart);
// array(4) { [0]=> string(6) "Tapete" [1]=> string(10) "Microondas" [2]=> string(7) "Feijão" [4]=> string(4) "Rodo" }