<?php
// An array with a string index where each value is assigned a specific key.

$People = [
    'William'=>'Taft',
    'Howard'=>'Little',
    'Betsy'=>'Cross',
    'Loriane'=>'Alto',
    'Dan'=>'Futura'
];

//echo $People['Betsy'] .PHP_EOL; //Finds the last name (value) of Betsy within the $People array.

//echo $People['Cross'] . PHP_EOL; // This you can not do because Betsy is the key which is attached to the value.

$People_Pets = [
    'Alex'=>'cat',
    'Louis'=>'iguana',
    'Ted'=> 'dog',
    'Allison'=>'hamster',
    'Doug'=>'rabbit',
    'Tony'=>'ferret'
];

//echo $People_Pets['Doug'] .PHP_EOL; // Finds which value is associated with 'Doug' in the $People_Pets array which is rabbit.

//echo count($People_Pets) . PHP_EOL; // Counts the amount of key/value pairs in the $People_Pets array.

$Cities_States = [
    'Sacramento'=> 'California',
    'Phoenix'=>'Arizona',
    'Salt Lake City'=>'Utah',
    'Reno'=> 'Nevada',
    'Albany'=>'New York',
    'Portland'=>'Oregon',
];

//echo count($Cities_States) . PHP_EOL; // Counts the amount of key/value pairs in $Cities_States which is 6.

//echo $Cities_States['Reno'] . PHP_EOL; // Returns the value paired with the key 'Reno' which is 'Nevada.'