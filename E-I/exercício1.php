<?php

/* media dos alunos*/

$alunos = [$a1 = 'Henrique' => [ 
        $n1 = 'nota1' => 8,
        $n2 = 'nota2' => 5,
        $n3 = 'nota3' => 7],

    $a2 = 'Julio' => [
        $n1 = 'nota1' => 7,
        $n2 = 'nota2' => 9,
        $n3 = 'nota3' => 5],

    $a3 = 'Carlos' => [
        $n1 = 'nota1' => 4,
        $n2 = 'nota2' => 6,
        $n3 = 'nota3' => 8]
];

function calcularMedia($notas) {
        $soma = $notas['nota1'] + $notas['nota2'] + $notas['nota3'];
        $media = $soma / 3;
    return $media;
}

$mediaHenrique = calcularMedia($alunos[$a1]);
$mediaJulio = calcularMedia($alunos[$a2]);
$mediaCarlos = calcularMedia($alunos[$a3]);


echo "a segunda nota de $a2 foi de " . $alunos[$a2][$n2];
echo PHP_EOL;

echo "A nota final de $a3 foi de " . $alunos[$a3][$n1] + $alunos[$a3][$n2] + $alunos[$a3][$n3];
echo PHP_EOL;

echo 'A média das notas do aluno ' . $a2 . ' foi de ' . $mediaJulio;