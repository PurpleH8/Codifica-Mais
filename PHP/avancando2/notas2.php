<?php

$notas1 = [
    'Vagner' => 8,
    'Lucas' => 7,
    'pietro' => 10
];

$notas2 = [
  
    'Lucas' => 6,
    'pietro' => 9
];
$alunosFaltantes = array_diff_key($notas1, $notas2);
var_dump(array_keys($alunosFaltantes));
echo 'nota dos alunos faltantes:' . PHP_EOL;
var_dump(array_values($alunosFaltantes));