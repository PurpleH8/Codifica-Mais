<?php

/* crie um programa que calcule a área e o perímetro de um retângulo. O programa deve solicitar ao usuário a largura e a altura do retângulo, e então exibir os resultados*/
/*formula: 
    área = largura * altura
    perímetro = 2 * (largura + altura)
 
exemplos: 
    largura: 5 metros
    altura: 3 metros
    área: 15 m²
    perímetro: 16 metros
*/

echo "olá, vamos calcular a área e o perimetro de um retângulo, mas para isso preciso de você" . PHP_EOL;
echo "DIga-me a largura do retângulo em metros" . PHP_EOL;


$largura = fgets(STDIN);

echo "Agora me diz a altura em metros." . PHP_EOL;

$altura = fgets(STDIN);

//calcular o perímetro

$perimetro = 2 * ($largura + $altura);
$area = $largura * $altura;

echo "o perímetro do retângulo é $perimetro metros.". PHP_EOL;
echo PHP_EOL;
echo "a área do retângulo é $area metros quadrados." . PHP_EOL;
echo PHP_EOL;
echo "obrigado por utilizar esse programa amador, vá em paz!";

