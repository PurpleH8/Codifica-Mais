<?php

/*
1. Crie uma classe base chamada Forma. 
2. A classe Forma deve ter um método público chamado calcularArea que 
retorna 0. 
3. Crie uma classe Retangulo que herda de Forma e sobrescreva o método 
calcularArea para calcular a área de um retângulo. 
4. Crie uma classe Circulo que herda de Forma e sobrescreva o método 
calcularArea para calcular a área de um círculo. 
5. Crie objetos das classes Retangulo e Circulo e exiba a área calculada para 
cada um. 
*/

abstract class Forma{

    public function calcularArea(){
        return 0;
    }
    public function ExibirDetalhes(){
        
    }
}
class Retangulo extends Forma{


    public function calcularAreaRetangulo($altura, $largura){
echo PHP_EOL;
echo PHP_EOL;
    echo 'Para calcular a area de um Retangulo, ele deve multiplicar a Altura pela Base, vejamos a formula :' . PHP_EOL . PHP_EOL;
    echo 'A = B . H';
    echo PHP_EOL;
    echo PHP_EOL . 'Vamos lá?' . PHP_EOL;
    echo PHP_EOL;
    echo "A altura do Retangulo é de $altura";
    echo PHP_EOL;
    echo "A largura do Retangulo é de $largura";
    echo PHP_EOL;
    $areaR = $altura * $largura;
    echo "A area de seu Retângulo é de $areaR";
    echo PHP_EOL;
    echo '--------------------------------------------------';
    }
}
class Circulo extends Forma{
    public function calcularAreaCirculo($raio){
echo PHP_EOL;
echo PHP_EOL;
        echo 'Para calcular a area de um Circulo, ele deve multiplicar o Pi pelo Raio ao quadrado, vejamos a formula :' . PHP_EOL . PHP_EOL;
        echo 'A = π . r²';
        echo PHP_EOL;
        echo PHP_EOL;
        echo 'Vamos lá?' . PHP_EOL;
        echo "Sabemos que o Pi é um número grande, então arredondaremos por 3,14.";
        echo PHP_EOL;
        echo "O raio de seu círculo é $raio";
        echo PHP_EOL;
        $areaC = 3.14 * ($raio * $raio);
        echo "A area de seu Círculo é de $areaC";
        echo PHP_EOL;

        if (fmod($areaC, 1) !== 0.0) {
            $areaC = round($areaC);
            echo "Caso seu número esteja decimal, podemos arredondar para $areaC";
            echo PHP_EOL;
        }
        
        echo '--------------------------------------------------';

    }
}