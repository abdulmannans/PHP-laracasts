<?php

$person = [
    'age' => 22,
    'hairColor' => 'Black' ,
    'Carrer' => 'Software Developer'
];

$person['name'] = 'Abdul Mannan';

echo "<pre>";
var_dump($person);
echo "</pre> <br>";

unset($person['age']);
require 'index-view.php';
?>
