<?php
$contador += 1;

//para =for
//para ($contador = 1; $contador <= 15; $contador + 1;) {
for ($contador = 1; $contador <= 15 ; $contador += 1) {
    echo "#$contador" . PHP_EOL;
}


/* pular o numero 13

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue;
    } 
    echo "#$contador" . PHP_EOL;
}
*/

/* o "break" quebra o código, parando no numero 12 antes da condição original se concretizar

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break;
    } 
    echo "#$contador" . PHP_EOL;
}
 */