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

$pets = [
    'animals'=> [
        'cat'=> 'mammal',
        'dog'=>'mammal',
        'turtle'=>'reptile',
        'parrot'=>'bird',
    ],
    'names'=> [
        'Hallie',
        'Freddie',
        'Tom',
        'Louis',
        'Tonya',
    ],
];

//echo $pets['animals']['turtle']. PHP_EOL; // Returns reptile since I am looking for the turtle's type.

//echo $pets['names']['Freddie'] . PHP_EOL; // Returns with an undefined index error because that is
// how you find a specific index when it's not a key/value pair.

//echo $pets['names'][1] . PHP_EOL; // Returns Freddie because it is on the 1st index on the
// 'names' array within the $pet's array.