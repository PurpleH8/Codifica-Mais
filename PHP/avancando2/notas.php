<?php
$notas = [
    'Vagner' => 10,
    'Wagner' =>9,
    'Barcellona' => 8,
    'Adalgamir' => 8,
    'Oi' => 6
];
krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Barcellona fez a prova?' . PHP_EOL;
var_dump(isset($notas['Barcellona']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));