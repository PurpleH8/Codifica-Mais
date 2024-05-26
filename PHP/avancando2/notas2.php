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

$nomesAlunos = (array_keys($alunosFaltantes));

$notaAlunos = (array_values($alunosFaltantes));

var_dump(array_combine($notaAlunos, $nomesAlunos));