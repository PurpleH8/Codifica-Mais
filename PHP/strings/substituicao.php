<?php

$texto = "qual o sentido dessa droga funcionar assim? caramba";

echo str_replace(["droga","caramba"], ["****","*******"], $texto) . PHP_EOL;
echo PHP_EOL;

echo strtr($texto, ['droga' => 'd', 'caramba' => 'c']) . PHP_EOL;