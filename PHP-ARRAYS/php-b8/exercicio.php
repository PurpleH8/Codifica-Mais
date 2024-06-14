<?php
 
 /*
 Você está organizando um churrasco com amigos e precisa dividir os custos
 igualmente entre todos. Sua tarefa é criar um programa que calcule quanto cada pessoa
 deve pagar com base nos itens comprados e no número de participantes. Aqui está o que o
 programa deve fazer:
 1. Crie um array para armazenar os itens comprados no churrasco e outro array para
 armazenar o preço de cada item.
 2. Solicite número total de participantes do churrasco.
 3. Crie uma função que receba o valor total dos itens e o número de participantes como
 parâmetros, e retorne o valor que cada pessoa deve pagar.
 4. Após calcular o valor que cada pessoa deve pagar, imprima o resultado, indicando
 quanto cada uma deve contribuir para o churrasco.
 5. Imprima qual foi o item mais caro do churrasco.
 6. Se o número de participantes for igual ou menor que um, imprima uma mensagem.
 “O churrasco foi cancelado, todo mundo furou!
 */
 
 $itensC = ['Carne', 'Cerveja', 'Refrigerante', 'Pão de alho'];
 $valorItem = [500, 120, 300, 120];
 

 
 function divisao($participantes, $valorItem) {
     $valorTotal = array_sum($valorItem);
     $valorPraPagar = $valorTotal / $participantes;
     return $valorPraPagar;
 }
 
 $participantes = readline('Quantas pessoas foram? ');
 if ($participantes > 1) {
     $valorAPagar = divisao($participantes, $valorItem);
     echo "Todos irao pagar $valorAPagar" . PHP_EOL;
     $maiorValor = max($valorItem);
     $indiceMaiorValor = array_search($maiorValor, $valorItem);
     $itemMaiorValor = $itensC[$indiceMaiorValor];
     
     echo "o item mais caro é $itemMaiorValor" . PHP_EOL;
 } else {
     "Não vai ter festa.";
 };
 
 