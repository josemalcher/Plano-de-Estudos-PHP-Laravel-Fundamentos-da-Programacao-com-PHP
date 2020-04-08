# FUNDAMENTOS DA PROGRAMAÇÃO COM PHP

https://academy.especializati.com.br/curso/fundamentos-programacao-php-7

DÊ OS SEUS PRIMEIROS PASSOS NA PROGRAMAÇÃO. APRENDA PHP, LÓGICA DE PROGRAMAÇÃO E MUITO MAIS. NO FINAL APRENDA A CRIAR UM SISTEMA REAL, UM MP3 ONLINE!

## <a name="indice">Índice</a>

1. [Conceitos do PHP](#parte1)     
2. [Organizando](#parte2)     
3. [PHP 7 Básico](#parte3)     
4. [Arrays no PHP](#parte4)     
5. [Recursos do PHP](#parte5)     
6. [Operadores Condicionais no PHP](#parte6)     
7. [Loops de Repetição no PHP](#parte7)     
8. [Funções no PHP 7](#parte8)     
9. [Manipulação de Strings](#parte9)     
10. [Operadores Matematicos no PHP](#parte10)     
11. [Entrada de Dados no PHP](#parte11)     
12. [Sessions e Cookies no PHP](#parte12)     
13. [Manipulação de Arquivos e Diretórios com PHP](#parte13)     
14. [MP3 Online com PHP](#parte14)     
---


## <a name="parte1">1 - Conceitos do PHP</a>

- 01 - Apresentação Curso de PHP 7 Básico
- 02 - O que é o PHP?
- 03 - Diferença entre Client e Server
- 04 - A História do PHP 

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - Organizando</a>

- 05 - Ferramentas Para o Curso de PHP 7
- 06 - Ambiente Completo PHP 7 com Docker (Laradock)
  - https://laradock.io/
- 07 - Múltiplos Projetos com Docker (Laradock)
- 08 - Utilizando o WampServer (não recomendado!)

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - PHP 7 Básico</a>

- 09 - Primeira Aplicação com PHP 7

```php
<?php
    echo "Hello word";
?>
```
 
- 10 - Tipos de Impressões com PHP 7

```php
<?php
    echo 123;
    echo 2.123;
    echo '123';
    print_r([1,2,3,4]); // imprime arrays
    var_dump([1,2,3,4]);// ideal para debugs
?>
```
 
- 11 - Comentários no PHP 7

```php
<?php
/*
 * comentário
 * 
 * */

// Comentário

# não tão utilizado  

?>
```

- 12 - Tipos de Variáveis no PHP 7
  - https://www.php.net/manual/pt_BR/language.types.intro.php
```php
<?php

$name = 'José Malcher';

echo $name;
echo '<br>';

$name = 'José Malcher Teste';
echo $name;
echo '<br>';

$name = 12.2;
echo $name;
echo '<br>';

$name = 123;
echo $name;
```

- 13 - Constantes no PHP 7
  - http://php.net/manual/pt_BR/language.constants.php

```php
<?php

define('NOME_CONSTANTE', 123);

const TESTE_CONSTANTE = 321;

var_dump(TESTE_CONSTANTE);
```

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Arrays no PHP</a>

- 14 - Definições e Formatos de Arrays no PHP

```php
<?php

// $cars = array(1, 'Carlos', 12.2);
// var_dump($cars[1]);

// $cars = ['Uno', 'Gol', 'Fusion', 'Civic'];
// var_dump($cars[2]);

/*
$car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018,
];
$car['airbag'] = false;
$car['som'] = 'Model 123';
echo $car['cor'];
$car['cor'] = 'Black';
echo $car['cor'];
*/

$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'name'  => 'Nome do Carro da Mercedes' 
    ],
    'Ford' => [
        'color' => 'yellow',
        'motor' => 3.2,
        'name'  => 'Carro da Ford'
    ],
    'Ferrari' => [
        'color' => 'red',
        'motor' => 10,
        'name'  => 'Ferrari'
    ],
];

echo $cars['Ford']['name'];
$cars['Ford']['name'] = 'New name car ford';
echo $cars['Ford']['name'];
```

- 15 - Manipulação de Arrays no PHP (compact, is_array, in_array)

```php
<?php

// $nomes = array('Carlos', 'EspecializaTi', 'Company');
// $nomes = ['Carlos', 'EspecializaTi', 'Company'];
$name = 'Carlos';
$company = 'EspecializaTi';
$year = 2018;

$infoCompany = [
    $name,
    $company,
    $year
];

// $infoCompany = compact('name', 'company', 'year');
// var_dump($infoCompany);

// var_dump(is_array($infoCompany));

// var_dump(in_array('Carlos', $infoCompany));
```

- 16 - Arrays no PHP (array_keys, array_values, count, array_merge)
  - https://www.php.net/manual/pt_BR/ref.array.php
  
```php
<?php

$infoCompany = [
    'name'          => 'EspecializaTi',
    'founder'       => 'Carlos Ferreira',
    'year_current'  => 2018,
];

$infoCompanyTwo = [
    'courses'       => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'total_courses' => 26,
];

// var_dump(array_keys($infoCompany));
/*
array(3) { [0]=> string(4) "name" [1]=> string(7) "founder" [2]=> string(12) "year_current" }
*/

// var_dump(array_values($infoCompany));
/*
 * array(3) { [0]=> string(13) "EspecializaTi" [1]=> string(15) "Carlos Ferreira" [2]=> int(2018) }
 */

 //var_dump(count($infoCompany));
/*
 * int(3)
 */

// $infoCompany = array_merge($infoCompany, $infoCompanyTwo);
// echo '<pre>';
// var_dump($infoCompany);
/*
array(5) {
    ["name"]=>
  string(13) "EspecializaTi"
    ["founder"]=>
  string(15) "Carlos Ferreira"
    ["year_current"]=>
  int(2018)
  ["courses"]=>
  array(4) {
        [0]=>
    string(3) "PHP"
        [1]=>
    string(2) "JS"
        [2]=>
    string(6) "Vue JS"
        [3]=>
    string(7) "Laravel"
  }
  ["total_courses"]=>
  int(26)
}*/

```


- 17 - Arrays no PHP (array_pop, array_shift, unset, array_push, array_unshift, array_unique)

```php
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
```

- 18 - Arrays no PHP (arsort, asort, sort)

```php
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

```

- 19 - Arrays no PHP (end, array_filter, array_map)

```php
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
```

[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Recursos do PHP</a>

- 20 - Concatenação no PHP

```php
<?php

$var1 = 'Algo';
$var2 = 'Outro';

$var3 = $var1 .' '. $var2 . ' '. 12;
// echo $var3;

$name = 'Carlos Ferreira';
$company = 'EspecializaTi';

// echo 'O '.$name.' é fundador da Empresa: '.$company;
// echo "O {$name} é fundador da Empresa: {$company}";
// echo 'Olá mundo!';
```

- 21 - Include vs Require no PHP 

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Site em PHP</title>
</head>
<body>
<?php
// include ('includes/header.php');
// require ('includes/header.php');
require_once('includes/header.php');
?>

<div>
    <?php
    echo 'Sou o conteúdo do site';
    ?>
</div>

<?php
include_once('includes/footer.php')
?>

</body>
</html>
```


[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Operadores Condicionais no PHP</a>

- 22 - Operadores Condicionais no PHP (if) 

```php
<?php

$number = 12;
$numberTwo = 12;

if ($number == $numberTwo && $number == 12) {
    echo 'É igual';

    echo 'Outro algo';
}
```

- 23 - Operador Condicional ELSE no PHP 


```php
<?php

$numberOne = 15;
$numberTwo = 16;

if ($numberOne == $numberTwo) {
    echo 'É igual';
} else {
    echo 'É diferente!';
}

echo '<hr>';

if ($numberOne < 20) {
    echo 'É menor!';
} else {
    echo 'É maior!';
}

```

- 24 - Operador Condicional ELSEIF no PHP 

```php
<?php

$numberOne = 12;

if ($numberOne == 14)
    echo 'Quatorze';
elseif($numberOne == 13)
    echo 'Treze';
elseif($numberOne == 12)
    echo 'Doze';
else
    echo 'Não identificado...';
```

- 25 - Operador Condicional SWITCH no PHP

```php
<?php

$number = 10;

switch ($number) {
    case $number == 12:
        echo 'Doze';    
    break;
    case $number == 13:
        echo 'Treze';    
    break;
    case $number == 14:
        echo 'Quatorze';    
    break;
    case $number == 15:
        echo 'Quinze';    
    break;
    default: 
        echo 'Valor não encontrado';
    break;
}
/*
if ($number == 12)
    echo 'Doze';
elseif ($number == 13)
    echo 'Treze';
elseif ($number == 14)
    echo 'Quatorze';
elseif ($number == 15)
    echo 'Quinze';
else
    echo 'Não identificado...';
*/
```


[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - Loops de Repetição no PHP</a>

- 26 - Loops de Repetição no PHP FOR

```php
<?php

$names = ['a', 'b', 'c', 'd', 'e', 'f'];

echo '<hr>';

for ($i = 0; $i<count($names); $i++) {
    echo $names[$i];
}
/**
for ($i = 10; $i>0; $i--) {
    echo "{$i} <br>";
}
 */
/**
for ($i = 0; $i<10; $i++) {
    echo "{$i} <br>";
}
 */

echo '<hr>';
```

- 27 - Loops de Repetição no PHP FOREACH

```php
<?php

// $names = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
$names = [
    'a' => 'aa',
    'b' => 'bb',
    'c' => 'cc',
    'd' => 'dd',
    'e' => 'ee',
    'f' => 'ff',
    'g' => 'gg',
    'h' => 'hh',
];

foreach ($names as $key => $name) {
    echo "{$name} <br>";
}
```

- 28 - Loops de Repetição no PHP WHILE

```php
<?php

$names = ['a', 'b', 'c', 'd'];

$i = 0;

while ($i < count($names)) {
    echo $names[$i];

    $i++;
}

echo '<hr>';

$a = 11;
do {
    echo $a;

    $a++;
} while ($a <= 10);
```


[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Funções no PHP 7</a>

- 29 - Declarar Funções no PHP 7

```php
<?php

function testFunction(): String  //A partir da versão 7
{
    return 'Sou uma função <br>';
}

echo testFunction();
echo testFunction();
echo testFunction();
echo testFunction();
echo testFunction();
echo testFunction();
```

- 30 - Funções com Parâmetros no PHP 7

```php
<?php

function pt(String $value)
{
    echo "{$value} <br>";
}
// pt('Algo');

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}
// echo sum(12, 90);

function sumTwo(int $n1, int $n2, int $taxa = 2):int
{
    return ($n1 + $n2) * $taxa;
}
echo sumTwo(1,2);
```

- 31 - Variáveis em Funções no PHP e uso do global

```php
<?php

$taxa = 2;

function sum(int $n1, int $n2):Array
{
    global $taxa;

    $teste = 12;
    $soma = ($n1 + $n2) * $taxa;

    return [
        'teste' => $teste,
        'soma'  => $soma,
    ];
}

//$result = sum(1,2);
//var_dump($result['soma']);
//echo sum(2,2);
//echo sum(2,2)['soma'];
```

- 32 - Funções Recursivas no PHP 7 

```php
<?php

// 4 => 4*3*2*1 = 24
// 2 => 2*1 = 2
// 3 => 3*2*1 = 6

function factorial(int $number): int
{
    if ($number <= 1)
        $number = $number;
    else
        $number *= factorial($number -1);

    return $number;
}

echo factorial(4);
```


[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Manipulação de Strings</a>

- 33 - Manipulação de Strings no PHP (strtoupper, strtolower, ucfirst, ucwords)

  - https://secure.php.net/manual/pt_BR/indexes.functions.php
  
```php
<?php

$name = 'EspecializaTi - Cursos Online de TI';

echo strtoupper($name);
echo '<hr>';
echo strtolower($name);
echo '<hr>';
echo ucfirst(strtolower($name));
echo '<hr>';
echo ucwords(strtolower($name));
/*
ESPECIALIZATI - CURSOS ONLINE DE TI
especializati - cursos online de ti
Especializati - cursos online de ti
Especializati - Cursos Online De Ti
*/

```

- 34 - Manipulação de Strings no PHP (explode, implode)

```php
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
```

- 35 - Manipulação de Strings no PHP (ltrim,rtrim,trim)

```php
<?php

$name = ' EspecializaTi ';
//var_dump($name);           // string(15) " EspecializaTi "
//var_dump(ltrim($name));    // string(14) "EspecializaTi "
//var_dump(rtrim($name));    // string(14) " EspecializaTi"
var_dump(trim($name));       // string(13) "EspecializaTi"
```

- 36 - Manipulação de Strings no PHP (str_replace,substr,strlen)

```php
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
```

- 37 - Manipulação de Strings no PHP (isset,unset)

```php
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
```

- 38 - Manipulação de Strings no PHP (date)

```php
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

```

- 39 - Manipulação de Strings no PHP (phpinfo)

```php
<?php

    phpinfo();
```

- 40 - Manipulação de Strings no PHP (md5,sha1,crypt,base64,hash)

```php
<?php

$password = '123456';

// echo md5($password);
// echo sha1($password);
// echo crypt($password, $salt);
// $passCr = base64_encode($password);
// echo $passCr;
// echo base64_decode($passCr);
// echo hash('sha512', $password);

echo cryptC($password);

function cryptC(String $value): String
{
    $hash = hash('sha512', sha1(md5(crypt($value, 'soLskisj#$sdkKd09'))));

    return $hash;
}
```


[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Operadores Matematicos no PHP</a>

- 41 - Operadores Aritiméticos PHP
- 42 - Operadores de Atriuição PHP
- 43 - Operadores Atribuição PHP (incremento, decremento)
- 44 - Operadores Lógicos PHP free45 - Operadores Relacionais PHP

[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Entrada de Dados no PHP</a>

- 46 - Formulários HTML
- 47 - Requisições GET vs POST no PHP
- 48 - Pegar Dados Formulários com PHP
- 49 - $_REQUEST no PHP
- 50 - Introdução a Validação de Formulários com PHP
- 51 - Upload de Arquivos no PHP
- 52 - Upload de Multiplos Arquivos no PHP

[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Sessions e Cookies no PHP</a>

- 53 - Sessões (SESSIONS) no PHP
- 54 - Cookies no PHP

[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Manipulação de Arquivos e Diretórios com PHP</a>

- 55 - Manipulação de diretórios no PHP (is_dir, mkdir, rmdir, getcwd, scandir, glob)
- 56 - Manipulação de arquivos no PHP (touch, copy, rename, unlink, file_exists)
- 57 - Manipulação de arquivos no PHP (file_put_contents, file_get_contents)
- 58 - Manipulação de arquivos no PHP (fopen, fclose, fwrite)
- 59 - Manipulação de arquivos no PHP (fgets, feof)

[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - MP3 Online com PHP</a>

- 60 - Criando o Template do MP3 com PHP
- 61 - Listagem FAKE dos Álbums com PHP
- 62 - Listagem real dos Álbums com PHP
- 63 - Página de Cadastrar Novo Álbum com PHP
- 64 - Listagem das Músicas do Álbum com PHP
- 65 - Upload Novo Álbum com PHP
- 66 - Cadastrar Novas Músicas para Álbum com PHP

[Voltar ao Índice](#indice)

---

