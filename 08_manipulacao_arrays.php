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
