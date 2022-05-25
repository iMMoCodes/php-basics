<?php
$fruits = ['apple','orange','pear'];

// Get length
    // echo count($fruits);

// Search array
    // var_dump(in_array('apple',$fruits));

// Add to array
    $fruits[] = 'grape';
    array_push($fruits,'blueberry','strawberry');
    array_unshift($fruits,'mango');

// Remove from array
    array_pop($fruits);
    array_shift($fruits);
    // unset($fruits[2]);

// Split into chunks
    $chunked_array = array_chunk($fruits, 2);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

// Concat arrays
    $arr3 = array_merge($arr1,$arr2);
    $arr4 = [...$arr1, ...$arr2];

$a = ['green','red','yellow'];
$b = ['avocado','apple','banana'];

    // Uses $a array as keys, $b as values
    $c = array_combine($a,$b);
    // Get keys
    $keys = array_keys($c);
    // Keys and values flip
    $flipped = array_flip($c);

$numbers = range(1,20);
    // Array map
    $newNumbers = array_map(fn($number) => "Number ${number}",$numbers);

    // Array filter
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

    // Array reduce
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

    // print_r($lessThan10);
    var_dump($sum);
?>