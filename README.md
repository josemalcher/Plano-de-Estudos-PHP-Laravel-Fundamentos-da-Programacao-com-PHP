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



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Operadores Condicionais no PHP</a>



[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - Loops de Repetição no PHP</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Funções no PHP 7</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Manipulação de Strings</a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Operadores Matematicos no PHP</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Entrada de Dados no PHP</a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Sessions e Cookies no PHP</a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Manipulação de Arquivos e Diretórios com PHP</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - MP3 Online com PHP</a>



[Voltar ao Índice](#indice)

---

