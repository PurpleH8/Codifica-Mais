<?php 


echo 'Exercicio no qual vai ler um array de 6 números e criar outro array onde cada elemento é o dobro do elemento correspondente no primeiro array' . PHP_EOL;

for ($i = 1; $i <= 6; $i++){
    echo "Digite o " . $i . "° número: ";
    $lista[] = trim(fgets(STDIN));
}
echo PHP_EOL;

for ($i = 0; $i <= 5; $i++){
    $listaDobrada[] = $lista[$i] * 2; 
    echo "O dobro do número da primeira lista de indice $i é: " . $listaDobrada[$i] . PHP_EOL;
}