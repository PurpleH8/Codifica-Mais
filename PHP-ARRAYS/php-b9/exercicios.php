<?php

/*
Crie um programa que calcule o valor final de uma compra com desconto progressivo. O
programa deve conter as seguintes funções:

1 - aplicarDesconto($valorCompra, $percentualDesconto): Recebe o valor da compra e
o percentual de desconto como parâmetros e retorna o valor final com o desconto aplicado.

2 - calcularDescontoProgressivo($valorCompra): Recebe o valor da compra como
parâmetro e retorna o valor final com o desconto progressivo aplicado.

● Se o valor da compra for menor que R$ 100,00, não há desconto.
● Se o valor da compra for entre R$ 100,00 e R$ 500,00, aplica-se um desconto de
10%.
● Se o valor da compra for maior que R$ 500,00, aplica-se um desconto de 20%.
O programa deve solicitar ao usuário o valor da compra e exibir o valor final após a
aplicação do desconto progressivo.
*/
$valorCompra = readline("Qual o valor da compra? ") . PHP_EOL;
$percentualDesconto = 0;

// Desconto (R$) = (Valor Original x Porcentagem de Desconto) / 100 

function aplicarDesconto($valorCompra,$percentualDesconto) {
    $desconto = ($valorCompra * $percentualDesconto) / 100;
    return $desconto;
}

function calcularDescontoProgressivo($valorCompra) {
    if ($valorCompra < 100) {
        $percentualDesconto = 0;
    } elseif ($valorCompra >= 100 && $valorCompra <= 500) {
        $percentualDesconto = 10;
    } else {
        $percentualDesconto = 20;
    }
    return $percentualDesconto;

}

$percentualDesconto = calcularDescontoProgressivo($valorCompra);
$desconto = aplicarDesconto($valorCompra, $percentualDesconto);
$valorFinal = $desconto;

echo "O preço total dos produto foi de R$" . $valorCompra . PHP_EOL;
echo "Desconto aplicado: " . $percentualDesconto . "% (" . $desconto . " R$)" . PHP_EOL;
echo "Valor final com desconto: R$ " . $valorFinal . PHP_EOL;