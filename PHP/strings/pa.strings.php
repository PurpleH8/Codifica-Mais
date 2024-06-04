<?php

$nome = "Icaro Silva";

$ehDaMinhaFamilia = str_contains($nome, 'Sila');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
