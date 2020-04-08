<?php

$state = 'São Paulo/SP';
$arrayState = explode('/', $state);
//var_dump($arrayState);
// array(2) { [0]=> string(10) "São Paulo" [1]=> string(2) "SP" }


$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
//var_dump($arrayInfo);     // array(4) { [0]=> string(10) "São Paulo" [1]=> string(2) "SP" [2]=> string(6) "Brasil" [3]=> string(5) "Terra" }
//var_dump($arrayInfo[2]); // string(6) "Brasil"

echo '<hr>';

$arrayTest = [1,2,3,4,5];
//echo implode($arrayInfo, ' # '); //São Paulo # SP # Brasil # Terra
//echo implode($arrayTest, ' - '); // 1 - 2 - 3 - 4 - 5