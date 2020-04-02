<?php

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

// echo $ages[count($ages) - 1];
// echo end($ages); // Retorna o ultimo elemento do array
/*
 56
 56
 */
echo '<hr>';

$agesFiltered = array_filter($ages, function ($age) { // Criando Filtro
    return $age >= 18;
});

// var_dump($agesFiltered);
// array(7) { [2]=> int(18) [3]=> int(20) [4]=> int(44) [5]=> int(50) [6]=> int(98) [7]=> int(78) [8]=> int(56) }


$names = ['Carlos', 'EspecializaTi', 'Company'];
/*
// função php que faz um-por-um
$names[0] = strtoupper($names[0]);
$names[1] = strtoupper($names[1]);
$names[2] = strtoupper($names[2]);
*/
$names = array_map('applyToupper', $names); // aplicar função em todos

function applyToupper($value) // a FUNÇÃO
{
    return strtoupper($value);
}

var_dump($names);
// array(3) { [0]=> string(6) "CARLOS" [1]=> string(13) "ESPECIALIZATI" [2]=> string(7) "COMPANY" }