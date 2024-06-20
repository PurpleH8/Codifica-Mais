<?php 

/* escreva um programa que converta a temperatura Celsius para Fahrenheit e vice-versa. 
 o programa deve solicitar ao usuário a temperatura e a unidade de medida(Celsius ou Fahrenheit), e então exibir o resultado da conversão.
 
 fórmula:
    C para F : °F = (°C * 9/5) +32
    F para C : °C = (°F - 32) * 5/9
    
exemplo:
    Temperatura: 25°C
    Temperatura em Fahrenheit: 77°F
 */


echo "Este programa vai converter temperaturas de Celsius para Fahrenheit e vice-versa. Está afim de utilizar? venha!" . PHP_EOL;

do {
    echo "Escolha uma temperatura: digite 'C' para Celsius ou 'F' para Fahrenheit (ou 'S' para sair): ";
    $escolha = trim(fgets(STDIN));
    
    if ($escolha == 'C') {
        echo "Digite a temperatura em Celsius: ";
        $temperaturaCelsius = floatval(trim(fgets(STDIN)));
        $temperaturaFahrenheit = ($temperaturaCelsius * 9/5) + 32;
        echo "Temperatura em Fahrenheit: " . $temperaturaFahrenheit . "°F" . PHP_EOL;
    } elseif ($escolha == 'F') {
        echo "Digite a temperatura em Fahrenheit: ";
        $temperaturaFahrenheit = floatval(trim(fgets(STDIN)));
        $temperaturaCelsius = ($temperaturaFahrenheit - 32) * 5/9;
        echo "Temperatura em Celsius: " . $temperaturaCelsius . "°C" . PHP_EOL;
    } elseif ($escolha == 'S') {
        echo "Fechado, colega. Programa encerrado. Adeus!" . PHP_EOL;
        break; // Lembrar de quando eu usar o break, o loop irá parar.
    } else {
        echo "Opção inválida. Escolha 'C' para Celsius, 'F' para Fahrenheit ou 'S' para sair." . PHP_EOL;
    }
} while (true);
