<?php

date_default_timezone_set('America/Sao_Paulo');
echo 'O ano atual: ' . date('Y') . '<br>';
echo 'O mês atual: ' . date('m') . '<br>';
echo 'O dia atual: ' . date('d') . '<br>';
echo 'A data atual: ' . date('d/m/Y') . '<br>';
echo 'A data atual: ' . date('Y-m-d') . '<br>';
echo 'Hora atual: ' . date('H') . '<br>';
echo 'Minuto atual: ' . date('i') . '<br>';
echo 'Segundo atual: ' . date('s') . '<br>';
echo 'Hora atual: ' . date('H:i:s') . '<br>';
echo 'Timezone: '    . date_default_timezone_get() . '<br>';
/*
O ano atual: 2020
O mês atual: 04
O dia atual: 07
A data atual: 07/04/2020
A data atual: 2020-04-07
Hora atual: 23
Minuto atual: 30
Segundo atual: 18
Hora atual: 23:30:18
Timezone: America/Sao_Paulo
*/
