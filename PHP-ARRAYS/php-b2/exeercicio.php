<?php 

/*Crie um programa que calcule a gorjeta a ser paga em um restaurante. O programa deve
    solicitar ao usuário o valor total da conta e a porcentagem da gorjeta. Em seguida, o
    programa deve calcular o valor da gorjeta e o valor total a ser pago, incluindo a gorjeta.
    Exemplo:
    ● Valor da conta: R$ 120,00
    ● Porcentagem da gorjeta: 10%
    ● Valor da gorjeta: R$ 12,00
    ● Valor total a ser pago: R$ 132,00 */

    echo 'Digite o valor total da conta: ' . PHP_EOL;

    $valorDaConta = trim(fgets(STDIN));

    echo "Digite a porcentagem total da gorjeta: ";

    $porcentagemDaGorjeta = trim(fgets(STDIN));

    $valorDaGorgeta = $valorDaConta / 100 * $porcentagemDaGorjeta;
    $totalASerPago = $valorDaConta + $valorDaGorgeta;

    echo "O valor total a ser pago junto com a gorjeta é de: R$$totalASerPago,00 " . PHP_EOL;