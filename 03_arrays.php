<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1,44,55,22];
$fruits = array('apple','orange','pear');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];

// Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'iMMo',
    'last_name' => 'codes',
    'email' => 'immo@codes.com'
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'iMMo',
        'last_name' => 'codes',
        'email' => 'immo@codes.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'John@Doe.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'Jane@Doe.com'
    ]
];

// echo $people[1]['email'];
var_dump(json_encode($people));

?>