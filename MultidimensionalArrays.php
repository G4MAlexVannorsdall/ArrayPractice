<?php
//An array which contains single or multiple arrays within and can be accessed through multiple indices.

$People = [
    'names'=> [
        'Kate',
        'Jon',
        'Louis',
        ],
    ];

//echo $People['names'][2] . PHP_EOL; // Finds the second index within the multidimensional array $People['names'] to be Louis.
// Do to there not being key/value pairs, you can use the specific index point to find the item you wish to find.

$food = [
    'types'=> [
        'kiwi'=> 'fruit',
        'bread'=>'grain',
        'lettuce'=>'vegetable',
        'tofu'=>'protein',
    ],
];

//echo $food['types']['bread'] . PHP_EOL; // Using key/value pairs you can find the specific value to a key.
// In this instance I wanted to find the 'bread' value which is grain.

$drinks =[
    'type'=> [
        'tea'=>'hot',
        'water'=>'cold',
        'soda'=>'cold',
        'juice'=>'cold',
        'coffee'=>'hot',
    ],
    'person'=>[
        'Luke',
        'Tony',
        'Sally',
        'Freddie',
    ],
];

//echo $drinks['type']['juice'] . PHP_EOL; //Here I found that 'juice''s type was 'cold'.

//echo $drinks['person'][2] . PHP_EOL; // Here I found the second index in the 'person' array within the $drinks array.