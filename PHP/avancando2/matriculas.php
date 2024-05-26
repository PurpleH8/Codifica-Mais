<?php

$alunos2023 = [
    'Vagner',
    'Lucas' ,
    'pietro' 
];

$novosAlunos = [
    'Gato', 
    'Juberto', 
    'Carlos',
    'Laila'

];

$alunos2024 = [...$alunos2023, 'Carlos Vinicius', ...$novosAlunnos];

$alunos2024[] = 'Franco';

var_dump($alunos2024);

