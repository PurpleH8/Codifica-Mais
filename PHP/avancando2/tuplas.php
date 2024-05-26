<?php

$dados = 
[
    'nome' => 'Paloma',
    'idade' => 19,
    'tamanho' => 163
];

//['nome' => $nome, 'idade' => $idade, 'tamanho' => $tamanho] = $dados;

extract($dados);

var_dump($nome, $idade, $tamanho);

var_dump(compact('nome','idade', 'tamanho'));