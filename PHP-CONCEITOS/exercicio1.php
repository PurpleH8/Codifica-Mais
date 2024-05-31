<?php

echo "digite um numero de sua preferencia";

$numero1 = trim(fgets(STDIN));

echo "digite outro numero de sua preferencia";

$numero2 = trim(fgets(STDIN));

$soma = $numero1 + $numero2;

echo "a somas desses numeros é igual a $soma" ;
