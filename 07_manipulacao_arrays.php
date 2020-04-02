<?php

$nomes = array('Carlos', 'EspecializaTi', 'Company');
$nomes = ['Carlos', 'EspecializaTi', 'Company'];
$name = 'Carlos';
$company = 'EspecializaTi';
$year = 2018;

$infoCompany = [
    $name,
    $company,
    $year
];

$infoCompany = compact('name', 'company', 'year');

//var_dump($infoCompany);
/*
array(3) { ["name"]=> string(6) "Carlos" ["company"]=> string(13) "EspecializaTi" ["year"]=> int(2018) }
*/


//var_dump(is_array($infoCompany));
/*
bool(true)
*/

// var_dump(in_array('Carlos', $infoCompany));
// bool(true)