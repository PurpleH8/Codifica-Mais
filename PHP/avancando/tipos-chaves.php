<?php
$array = [
    1 => 'a', 
    '1' => 'b', 
    1.5 => 'c', 
    true => 'd',
    'canone' => 'chopada'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}