<?php

$domain_1 = 'www.especializati.com';
$domain_2 = 'https://www.especializati.com.br';

//echo str_replace('www.', 'https://www.', $domain_1);   // https://www.especializati.com
//echo substr($domain_1, 0, 4);                         //  www.
//echo substr($domain_1, -7);                           //  ati.com

$protocol = substr($domain_2, 0, 8);
if ($protocol == 'https://')
    echo 'É seguro!';
else
    echo 'Não é seguro!';

// É seguro!


//var_dump(substr($domain_2, 12, -7)); // string(13) "especializati"

echo strlen($domain_2); // 32