<?php

/* 
 Solicite ao usuário seu peso (em quilogramas) e altura (em metros) e calcule o IMC
 utilizando a fórmula: IMC = peso / (altura * altura).
 Depois de obter o resultado de IMC, deve-se interpretar o valor utilizando a seguinte tabela:
 */
 
 function sim($altura, $peso) {
     $valorSim = $peso / ($altura * $altura);
     if ($valorSim < 18.5) {
         return "Tu é magro";
     } else if ($valorSim >= 18.5 && $valorSim <= 24.9) {
         return "Voce é humano";
     } else if ($valorSim >= 25 && $valorSim <= 29.9) {
         return "Ta gordinho";
     } else if ($valorSim >= 30 && $valorSim <= 34.9) {
         return "Ta gordo, mas ainda é humano";
     } else if ($valorSim >= 35 && $valorSim <= 39.9) {
         return "Putz, larga a lasanha";
     } else if ($valorSim >= 40) {
         return "Meu Deus.";
     }
 }
 
 $peso = readline ("qual teu peso? ");
 $altura = readline('Altura??? ');
 $valorSim = sim($altura, $peso);
 
 echo $valorSim;